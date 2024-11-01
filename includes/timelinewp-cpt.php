<?php
add_action( 'init', 'timelineSliderwp_CPT' );
if ( !function_exists('timelineSliderwp_CPT') ) {
    function timelineSliderwp_CPT() {
    
        /**
         * Post Type: Timeline Slides.
         */

        $labels = [
            "name" => __( "Timeline Slides", "timelineslider_wp" ),
            "singular_name" => __( "Timeline Slide", "timelineslider_wp" ),
            "menu_name" => __( "Timeline Slider", "timelineslider_wp" ),
            "all_items" => __( "Timeline Slides", "timelineslider_wp" ),
            "add_new" => __( "Add New Timeline Slide", "timelineslider_wp" ),
            "add_new_item" => __( "Add new Timeline Slide", "timelineslider_wp" ),
            "edit_item" => __( "Edit Timeline Slide", "timelineslider_wp" ),
            "new_item" => __( "New Timeline Slide", "timelineslider_wp" ),
            "view_item" => __( "View Timeline Slide", "timelineslider_wp" ),
            "view_items" => __( "View Timeline Slides", "timelineslider_wp" ),
            "search_items" => __( "Search Timeline Slides", "timelineslider_wp" ),
            "not_found" => __( "No Timeline Slides found", "timelineslider_wp" ),
            "not_found_in_trash" => __( "No Timeline Slides found in trash", "timelineslider_wp" ),
            "parent" => __( "Parent Timeline Slide:", "timelineslider_wp" ),
            "featured_image" => __( "Featured image for this Timeline Slide", "timelineslider_wp" ),
            "set_featured_image" => __( "Set featured image for this Timeline Slide", "timelineslider_wp" ),
            "remove_featured_image" => __( "Remove featured image for this Timeline Slide", "timelineslider_wp" ),
            "use_featured_image" => __( "Use as featured image for this Timeline Slide", "timelineslider_wp" ),
            "archives" => __( "Timeline Slide archives", "timelineslider_wp" ),
            "insert_into_item" => __( "Insert into Timeline Slide", "timelineslider_wp" ),
            "uploaded_to_this_item" => __( "Upload to this Timeline Slide", "timelineslider_wp" ),
            "filter_items_list" => __( "Filter Timeline Slides list", "timelineslider_wp" ),
            "items_list_navigation" => __( "Timeline Slides list navigation", "timelineslider_wp" ),
            "items_list" => __( "Timeline Slides list", "timelineslider_wp" ),
            "attributes" => __( "Timeline Slides attributes", "timelineslider_wp" ),
            "name_admin_bar" => __( "Timeline Slide", "timelineslider_wp" ),
            "item_published" => __( "Timeline Slide published", "timelineslider_wp" ),
            "item_published_privately" => __( "Timeline Slide published privately.", "timelineslider_wp" ),
            "item_reverted_to_draft" => __( "Timeline Slide reverted to draft.", "timelineslider_wp" ),
            "item_scheduled" => __( "Timeline Slide scheduled", "timelineslider_wp" ),
            "item_updated" => __( "Timeline Slide updated.", "timelineslider_wp" ),
            "parent_item_colon" => __( "Parent Timeline Slide:", "timelineslider_wp" ),
        ];

        $args = [
            "label" => __( "Timeline Slides", "timelineslider_wp" ),
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "publicly_queryable" => true,
            "show_ui" => true,
            "show_in_rest" => true,
            "rest_base" => "",
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "has_archive" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "delete_with_user" => false,
            "exclude_from_search" => false,
            "capability_type" => "post",
            "map_meta_cap" => true,
            "hierarchical" => true,
            "rewrite" => [ "slug" => "timeline_slider", "with_front" => true ],
            "query_var" => true,
            "menu_icon" => "dashicons-excerpt-view",
            "supports" => [ "title", "editor", "thumbnail" ],
            "taxonomies" => [ "timeline_layout" ],
            "show_in_graphql" => false,
        ];

        register_post_type( "timeline_slider", $args );
    }
    
}