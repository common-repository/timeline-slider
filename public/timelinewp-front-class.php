<?php

if (!class_exists('timelinesliderFront')) {
    class timelinesliderFront {
        public function __construct() {
            add_shortcode('twp', array($this, 'timelineWP_shortcode'));
            add_action('wp_enqueue_scripts', array($this, 'timelineWP_scripts') );
        }
        
        public function timelineWP_scripts() {
            wp_enqueue_style( 'timeline-styles', TWP_URL . '/public/assets/css/styles.css' );
            wp_enqueue_style( 'timeline-slick-css', TWP_URL . '/public/assets/css/slick-theme.css' );
            
            wp_enqueue_script( 'jquery' );
            wp_enqueue_script( 'timeline-slick-js', TWP_URL . '/public/assets/js/slick.js' );
            wp_enqueue_script( 'timeline-custom-js', TWP_URL . '/public/assets/js/custom.js' );
        }
        
        public function timelineWP_shortcode($layout_id) {
            $tax_id = $layout_id['layout'];
            ob_start(); 
            ?>
            <div class="timelinesliderwp">
                <?php
                $arg = array(
                    'post_type'         => 'timeline_slider',
                    'post_status'       => 'publish',
                    'posts_per_page'    => '-1',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'timeline_layout',
                            'terms' => $tax_id,
                        ),
                    ),
                );
                $timelineQuery = new WP_Query($arg);
                if ( $timelineQuery->have_posts() ) {
                    while ( $timelineQuery->have_posts() ) : $timelineQuery->the_post();
                        ?>
                        <div class="timelinewpSlick" data-title="<?php esc_attr__( the_title(), 'timelineslider_wp' ); ?>">
                        <?php
                        echo the_content();
                        ?>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata(); 
                }
                ?>
            </div>
            <?php
            return ob_get_clean();
        }
    }
    new timelinesliderFront();
}