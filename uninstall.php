<?php
// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

if ( is_admin() ) {
    // Delete all posts
    $allposts= get_posts( array(
        'post_type'     => 'timeline_slider',
        'numberposts'   => -1) );
    foreach ($allposts as $eachpost) {
      wp_delete_post( $eachpost->ID, true );
    }
    
    // Delete all terms
    
    // Set global
    global $wpdb;
    // Delete terms
    $wpdb->query( "
        DELETE FROM
        {$wpdb->terms}
        WHERE term_id IN
        ( SELECT * FROM (
            SELECT {$wpdb->terms}.term_id
            FROM {$wpdb->terms}
            JOIN {$wpdb->term_taxonomy}
            ON {$wpdb->term_taxonomy}.term_id = {$wpdb->terms}.term_id
            WHERE taxonomy = 'films_category'
        ) as T
        );
    ");
    // Delete taxonomies
    $wpdb->query( "DELETE FROM {$wpdb->term_taxonomy} WHERE taxonomy = 'timeline_layout'" );
}
