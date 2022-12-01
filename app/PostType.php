<?php
namespace Ok_Nom_Posts;
class PostType{

    public function __construct(){
        add_action( 'init', array($this,'register_post_type') );
    }

    public function register_post_type() {

        /**
         * Post Type: Nominations.
         */
    
        $labels = [
            "name" => esc_html__( "Nominations", "twentytwenty" ),
            "singular_name" => esc_html__( "Nomination", "twentytwenty" ),
            "menu_name" => esc_html__( "My Nominations", "twentytwenty" ),
            "all_items" => esc_html__( "All Nominations", "twentytwenty" ),
            "add_new" => esc_html__( "Add new", "twentytwenty" ),
            "add_new_item" => esc_html__( "Add new Nomination", "twentytwenty" ),
            "edit_item" => esc_html__( "Edit Nomination", "twentytwenty" ),
            "new_item" => esc_html__( "New Nomination", "twentytwenty" ),
            "view_item" => esc_html__( "View Nomination", "twentytwenty" ),
            "view_items" => esc_html__( "View Nominations", "twentytwenty" ),
            "search_items" => esc_html__( "Search Nominations", "twentytwenty" ),
            "not_found" => esc_html__( "No Nominations found", "twentytwenty" ),
            "not_found_in_trash" => esc_html__( "No Nominations found in trash", "twentytwenty" ),
            "parent" => esc_html__( "Parent Nomination:", "twentytwenty" ),
            "featured_image" => esc_html__( "Featured image for this Nomination", "twentytwenty" ),
            "set_featured_image" => esc_html__( "Set featured image for this Nomination", "twentytwenty" ),
            "remove_featured_image" => esc_html__( "Remove featured image for this Nomination", "twentytwenty" ),
            "use_featured_image" => esc_html__( "Use as featured image for this Nomination", "twentytwenty" ),
            "archives" => esc_html__( "Nomination archives", "twentytwenty" ),
            "insert_into_item" => esc_html__( "Insert into Nomination", "twentytwenty" ),
            "uploaded_to_this_item" => esc_html__( "Upload to this Nomination", "twentytwenty" ),
            "filter_items_list" => esc_html__( "Filter Nominations list", "twentytwenty" ),
            "items_list_navigation" => esc_html__( "Nominations list navigation", "twentytwenty" ),
            "items_list" => esc_html__( "Nominations list", "twentytwenty" ),
            "attributes" => esc_html__( "Nominations attributes", "twentytwenty" ),
            "name_admin_bar" => esc_html__( "Nomination", "twentytwenty" ),
            "item_published" => esc_html__( "Nomination published", "twentytwenty" ),
            "item_published_privately" => esc_html__( "Nomination published privately.", "twentytwenty" ),
            "item_reverted_to_draft" => esc_html__( "Nomination reverted to draft.", "twentytwenty" ),
    "item_scheduled" => esc_html__( "Nomination scheduled", "twentytwenty" ),
            "item_updated" => esc_html__( "Nomination updated.", "twentytwenty" ),
            "parent_item_colon" => esc_html__( "Parent Nomination:", "twentytwenty" ),
        ];
    
        $args = [
            "label" => esc_html__( "Nominations", "twentytwenty" ),
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "publicly_queryable" => true,
            "show_ui" => true,
            "show_in_rest" => true,
            "rest_base" => "",
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "rest_namespace" => "wp/v2",
            "has_archive" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "delete_with_user" => false,
            "exclude_from_search" => false,
            "capability_type" => "post",
            "map_meta_cap" => true,
            "hierarchical" => false,
            "can_export" => false,
            "rewrite" => [ "slug" => "nominations", "with_front" => true ],
            "query_var" => true,
            "menu_icon" => "dashicons-welcome-learn-more",
            "supports" => [ "title",  "author" ],
            "show_in_graphql" => false,
        ];
    
        register_post_type( "wp_nomination", $args );
    }
    
    
}

new PostType();