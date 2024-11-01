<?php

if (!class_exists('timelineSliderWP')) {
    class timelineSliderWP {
        public function __construct() {
            require TWP_PATH . 'includes/timelinewp-cpt.php';
            require TWP_PATH . 'includes/timelinewp-tax.php';
            
            register_activation_hook( TWP_FILE, array( 'timelineSliderWP', 'timelinesliderWP_activate') );
            register_deactivation_hook( TWP_FILE, array( 'timelineSliderWP', 'timelinesliderWP_deactivate') );
            register_uninstall_hook( TWP_FILE, array( 'timelineSliderWP', 'timelinesliderWP_uninstall') );

            add_filter( 'manage_edit-timeline_layout_columns', array($this, 'timeline_column_header'), 10, 1);
            add_action( 'manage_timeline_layout_custom_column', array($this, 'timeline_column_content'), 10, 3);
            add_filter( 'plugin_action_links_'.TWP_BASE, array($this, 'plugin_links') );
        }

        public static function timelinesliderWP_activate() {
            flush_rewrite_rules();
        }

        public static function timelinesliderWP_deactivate() {
            unregister_post_type( 'timeline_slider' );
            unregister_taxonomy( 'timeline_layout' );
            flush_rewrite_rules();
        }

        public static function timelinesliderWP_uninstall() {
            require TWP_PATH . 'uninstall.php';
        }

        function timeline_column_header( $columns ) {
            $columns['timelinewp_shortcodes'] = __('Shortcode', 'timelineslider_wp');
            return $columns;
        }

        function timeline_column_content( $value, $column_name, $tax_id ) {
            if ( $column_name == 'timelinewp_shortcodes' ) {
                $value = '[twp layout="'.$tax_id.'"]';
            }
            return $value; // this is the display value
        }

        public function plugin_links( $links ) {
            $addtional_links = '<a target="_blank" href="https://hamzamairaj.dev/timeline-slider-for-wordpress-plugin/">'.esc_html__( 'Docs', 'timelineslider_wp' ).'</a> | <a target="_blank" href="https://community.hamzamairaj.dev/">'.esc_html__( 'Community', 'timelineslider_wp' ).'</a> | <a target="_blank" href="https://hamzamairaj.dev/contact">'.esc_html__( 'Support', 'timelineslider_wp' ).'</a>';
            array_push( $links, $addtional_links );
            return $links;
        }
    }
    new timelineSliderWP();
}
