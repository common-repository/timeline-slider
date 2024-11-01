<?php
add_action( 'init', 'timelineSliderwp_layout' );
if ( !function_exists('timelineSliderwp_layout') ) {
    function timelineSliderwp_layout() {
    
        /**
         * Taxonomy: Timeline Layouts.
         */

        $labels = [
            "name" => __( "Timeline Layouts", "timelineslider_wp" ),
            "singular_name" => __( "Timeline Layout", "timelineslider_wp" ),
            "menu_name" => __( "Timeline Layouts", "timelineslider_wp" ),
            "all_items" => __( "All Timeline Layouts", "timelineslider_wp" ),
            "edit_item" => __( "Edit Timeline Layout", "timelineslider_wp" ),
            "view_item" => __( "View Timeline Layout", "timelineslider_wp" ),
            "update_item" => __( "Update Timeline Layout name", "timelineslider_wp" ),
            "add_new_item" => __( "Add new Timeline Layout", "timelineslider_wp" ),
            "new_item_name" => __( "New Timeline Layout name", "timelineslider_wp" ),
            "parent_item" => __( "Parent Timeline Layout", "timelineslider_wp" ),
            "parent_item_colon" => __( "Parent Timeline Layout:", "timelineslider_wp" ),
            "search_items" => __( "Search Timeline Layouts", "timelineslider_wp" ),
            "popular_items" => __( "Popular Timeline Layouts", "timelineslider_wp" ),
            "separate_items_with_commas" => __( "Separate Timeline Layouts with commas", "timelineslider_wp" ),
            "add_or_remove_items" => __( "Add or remove Timeline Layouts", "timelineslider_wp" ),
            "choose_from_most_used" => __( "Choose from the most used Timeline Layouts", "timelineslider_wp" ),
            "not_found" => __( "No Timeline Layouts found", "timelineslider_wp" ),
            "no_terms" => __( "No Timeline Layouts", "timelineslider_wp" ),
            "items_list_navigation" => __( "Timeline Layouts list navigation", "timelineslider_wp" ),
            "items_list" => __( "Timeline Layouts list", "timelineslider_wp" ),
            "back_to_items" => __( "Back to Timeline Layouts", "timelineslider_wp" ),
        ];

        
        $args = [
            "label" => __( "Timeline Layouts", "timelineslider_wp" ),
            "labels" => $labels,
            "public" => true,
            "publicly_queryable" => true,
            "hierarchical" => true,
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "query_var" => true,
            "rewrite" => [ 'slug' => 'timeline_layout', 'with_front' => true, ],
            "show_admin_column" => false,
            "show_in_rest" => true,
            "show_tagcloud" => false,
            "rest_base" => "timeline_layout",
            "rest_controller_class" => "WP_REST_Terms_Controller",
            "show_in_quick_edit" => false,
            "show_in_graphql" => false,
        ];
        register_taxonomy( "timeline_layout", [ "timeline_slider" ], $args );
    }
}