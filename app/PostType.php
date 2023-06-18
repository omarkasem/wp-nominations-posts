<?php
namespace Ok_Nom_Posts;
class PostType{

    public function __construct(){
        add_action( 'init', array($this,'register_post_type') );

        add_action( 'init', array($this,'register_taxonomy') );
    }

    public function register_post_type() {

        /**
         * Post Type: Nominations.
         */
    
        $labels = [
            "name" => esc_html__( "Nominations", "twentytwentythree" ),
            "singular_name" => esc_html__( "Nomination", "twentytwentythree" ),
            "menu_name" => esc_html__( "My Nominations", "twentytwentythree" ),
            "all_items" => esc_html__( "All Nominations", "twentytwentythree" ),
            "add_new" => esc_html__( "Add new", "twentytwentythree" ),
            "add_new_item" => esc_html__( "Add new Nomination", "twentytwentythree" ),
            "edit_item" => esc_html__( "Edit Nomination", "twentytwentythree" ),
            "new_item" => esc_html__( "New Nomination", "twentytwentythree" ),
            "view_item" => esc_html__( "View Nomination", "twentytwentythree" ),
            "view_items" => esc_html__( "View Nominations", "twentytwentythree" ),
            "search_items" => esc_html__( "Search Nominations", "twentytwentythree" ),
            "not_found" => esc_html__( "No Nominations found", "twentytwentythree" ),
            "not_found_in_trash" => esc_html__( "No Nominations found in trash", "twentytwentythree" ),
            "parent" => esc_html__( "Parent Nomination:", "twentytwentythree" ),
            "featured_image" => esc_html__( "Featured image for this Nomination", "twentytwentythree" ),
            "set_featured_image" => esc_html__( "Set featured image for this Nomination", "twentytwentythree" ),
            "remove_featured_image" => esc_html__( "Remove featured image for this Nomination", "twentytwentythree" ),
            "use_featured_image" => esc_html__( "Use as featured image for this Nomination", "twentytwentythree" ),
            "archives" => esc_html__( "Nomination archives", "twentytwentythree" ),
            "insert_into_item" => esc_html__( "Insert into Nomination", "twentytwentythree" ),
            "uploaded_to_this_item" => esc_html__( "Upload to this Nomination", "twentytwentythree" ),
            "filter_items_list" => esc_html__( "Filter Nominations list", "twentytwentythree" ),
            "items_list_navigation" => esc_html__( "Nominations list navigation", "twentytwentythree" ),
            "items_list" => esc_html__( "Nominations list", "twentytwentythree" ),
            "attributes" => esc_html__( "Nominations attributes", "twentytwentythree" ),
            "name_admin_bar" => esc_html__( "Nomination", "twentytwentythree" ),
            "item_published" => esc_html__( "Nomination published", "twentytwentythree" ),
            "item_published_privately" => esc_html__( "Nomination published privately.", "twentytwentythree" ),
            "item_reverted_to_draft" => esc_html__( "Nomination reverted to draft.", "twentytwentythree" ),
            "item_scheduled" => esc_html__( "Nomination scheduled", "twentytwentythree" ),
            "item_updated" => esc_html__( "Nomination updated.", "twentytwentythree" ),
            "parent_item_colon" => esc_html__( "Parent Nomination:", "twentytwentythree" ),
        ];
    
        $args = [
            "label" => esc_html__( "Nominations", "twentytwentythree" ),
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
            "rewrite" => [ "slug" => "nomination", "with_front" => true ],
            "query_var" => true,
            "menu_icon" => "dashicons-welcome-learn-more",
            "supports" => [ "title", "thumbnail", "author" ],
            "show_in_graphql" => false,
        ];
    
        register_post_type( "wp_nomination", $args );
    
        /**
         * Post Type: Quotes.
         */
    
        $labels = [
            "name" => esc_html__( "Quotes", "twentytwentythree" ),
            "singular_name" => esc_html__( "Quote", "twentytwentythree" ),
            "menu_name" => esc_html__( "My Quotes", "twentytwentythree" ),
            "all_items" => esc_html__( "All Quotes", "twentytwentythree" ),
            "add_new" => esc_html__( "Add new", "twentytwentythree" ),
            "add_new_item" => esc_html__( "Add new Quote", "twentytwentythree" ),
            "edit_item" => esc_html__( "Edit Quote", "twentytwentythree" ),
            "new_item" => esc_html__( "New Quote", "twentytwentythree" ),
            "view_item" => esc_html__( "View Quote", "twentytwentythree" ),
            "view_items" => esc_html__( "View Quotes", "twentytwentythree" ),
            "search_items" => esc_html__( "Search Quotes", "twentytwentythree" ),
            "not_found" => esc_html__( "No Quotes found", "twentytwentythree" ),
            "not_found_in_trash" => esc_html__( "No Quotes found in trash", "twentytwentythree" ),
            "parent" => esc_html__( "Parent Quote:", "twentytwentythree" ),
            "featured_image" => esc_html__( "Featured image for this Quote", "twentytwentythree" ),
            "set_featured_image" => esc_html__( "Set featured image for this Quote", "twentytwentythree" ),
            "remove_featured_image" => esc_html__( "Remove featured image for this Quote", "twentytwentythree" ),
            "use_featured_image" => esc_html__( "Use as featured image for this Quote", "twentytwentythree" ),
            "archives" => esc_html__( "Quote archives", "twentytwentythree" ),
            "insert_into_item" => esc_html__( "Insert into Quote", "twentytwentythree" ),
            "uploaded_to_this_item" => esc_html__( "Upload to this Quote", "twentytwentythree" ),
            "filter_items_list" => esc_html__( "Filter Quotes list", "twentytwentythree" ),
            "items_list_navigation" => esc_html__( "Quotes list navigation", "twentytwentythree" ),
            "items_list" => esc_html__( "Quotes list", "twentytwentythree" ),
            "attributes" => esc_html__( "Quotes attributes", "twentytwentythree" ),
            "name_admin_bar" => esc_html__( "Quote", "twentytwentythree" ),
            "item_published" => esc_html__( "Quote published", "twentytwentythree" ),
            "item_published_privately" => esc_html__( "Quote published privately.", "twentytwentythree" ),
            "item_reverted_to_draft" => esc_html__( "Quote reverted to draft.", "twentytwentythree" ),
            "item_scheduled" => esc_html__( "Quote scheduled", "twentytwentythree" ),
            "item_updated" => esc_html__( "Quote updated.", "twentytwentythree" ),
            "parent_item_colon" => esc_html__( "Parent Quote:", "twentytwentythree" ),
        ];
    
        $args = [
            "label" => esc_html__( "Quotes", "twentytwentythree" ),
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
            "rewrite" => [ "slug" => "quote", "with_front" => true ],
            "query_var" => true,
            "supports" => [ "title" ],
            "show_in_graphql" => false,
        ];
    
        register_post_type( "wp_quote", $args );
        
    }
    
    

    function register_taxonomy() {

        /**
         * Taxonomy: Categories.
         */
    
        $labels = [
            "name" => esc_html__( "Categories", "hello-elementor" ),
            "singular_name" => esc_html__( "Category", "hello-elementor" ),
            "menu_name" => esc_html__( "Categories", "hello-elementor" ),
            "all_items" => esc_html__( "All Categories", "hello-elementor" ),
            "edit_item" => esc_html__( "Edit Category", "hello-elementor" ),
            "view_item" => esc_html__( "View Category", "hello-elementor" ),
            "update_item" => esc_html__( "Update Category name", "hello-elementor" ),
            "add_new_item" => esc_html__( "Add new Category", "hello-elementor" ),
            "new_item_name" => esc_html__( "New Category name", "hello-elementor" ),
            "parent_item" => esc_html__( "Parent Category", "hello-elementor" ),
            "parent_item_colon" => esc_html__( "Parent Category:", "hello-elementor" ),
            "search_items" => esc_html__( "Search Categories", "hello-elementor" ),
            "popular_items" => esc_html__( "Popular Categories", "hello-elementor" ),
            "separate_items_with_commas" => esc_html__( "Separate Categories with commas", "hello-elementor" ),
            "add_or_remove_items" => esc_html__( "Add or remove Categories", "hello-elementor" ),
            "choose_from_most_used" => esc_html__( "Choose from the most used Categories", "hello-elementor" ),
            "not_found" => esc_html__( "No Categories found", "hello-elementor" ),
            "no_terms" => esc_html__( "No Categories", "hello-elementor" ),
            "items_list_navigation" => esc_html__( "Categories list navigation", "hello-elementor" ),
            "items_list" => esc_html__( "Categories list", "hello-elementor" ),
            "back_to_items" => esc_html__( "Back to Categories", "hello-elementor" ),
            "name_field_description" => esc_html__( "The name is how it appears on your site.", "hello-elementor" ),
            "parent_field_description" => esc_html__( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "hello-elementor" ),
            "slug_field_description" => esc_html__( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "hello-elementor" ),
            "desc_field_description" => esc_html__( "The description is not prominent by default; however, some themes may show it.", "hello-elementor" ),
        ];
    
        
        $args = [
            "label" => esc_html__( "Categories", "hello-elementor" ),
            "labels" => $labels,
            "public" => true,
            "publicly_queryable" => true,
            "hierarchical" => true,
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "query_var" => true,
            "rewrite" => [ 'slug' => 'nomination_category', 'with_front' => true, ],
            "show_admin_column" => true,
            "show_in_rest" => true,
            "show_tagcloud" => false,
            "rest_base" => "nomination_category",
            "rest_controller_class" => "WP_REST_Terms_Controller",
            "rest_namespace" => "wp/v2",
            "show_in_quick_edit" => true,
            "sort" => true,
            "show_in_graphql" => false,
        ];
        register_taxonomy( "nomination_category", [ "wp_nomination" ], $args );
		
		
        $labels = [
            "name" => esc_html__( "Authors", "hello-elementor" ),
            "singular_name" => esc_html__( "Author", "hello-elementor" ),
            "menu_name" => esc_html__( "Authors", "hello-elementor" ),
            "all_items" => esc_html__( "All Authors", "hello-elementor" ),
            "edit_item" => esc_html__( "Edit Author", "hello-elementor" ),
            "view_item" => esc_html__( "View Author", "hello-elementor" ),
            "update_item" => esc_html__( "Update Author name", "hello-elementor" ),
            "add_new_item" => esc_html__( "Add new Author", "hello-elementor" ),
            "new_item_name" => esc_html__( "New Author name", "hello-elementor" ),
            "parent_item" => esc_html__( "Parent Author", "hello-elementor" ),
            "parent_item_colon" => esc_html__( "Parent Author:", "hello-elementor" ),
            "search_items" => esc_html__( "Search Authors", "hello-elementor" ),
            "popular_items" => esc_html__( "Popular Authors", "hello-elementor" ),
            "separate_items_with_commas" => esc_html__( "Separate Authors with commas", "hello-elementor" ),
            "add_or_remove_items" => esc_html__( "Add or remove Authors", "hello-elementor" ),
            "choose_from_most_used" => esc_html__( "Choose from the most used Authors", "hello-elementor" ),
            "not_found" => esc_html__( "No Authors found", "hello-elementor" ),
            "no_terms" => esc_html__( "No Authors", "hello-elementor" ),
            "items_list_navigation" => esc_html__( "Authors list navigation", "hello-elementor" ),
            "items_list" => esc_html__( "Authors list", "hello-elementor" ),
            "back_to_items" => esc_html__( "Back to Authors", "hello-elementor" ),
            "name_field_description" => esc_html__( "The name is how it appears on your site.", "hello-elementor" ),
            "parent_field_description" => esc_html__( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "hello-elementor" ),
            "slug_field_description" => esc_html__( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "hello-elementor" ),
            "desc_field_description" => esc_html__( "The description is not prominent by default; however, some themes may show it.", "hello-elementor" ),
        ];
    
        
        $args = [
            "label" => esc_html__( "Authors", "hello-elementor" ),
            "labels" => $labels,
            "public" => true,
            "publicly_queryable" => true,
            "hierarchical" => true,
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "query_var" => true,
            "rewrite" => [ 'slug' => 'nomination_author', 'with_front' => true, ],
            "show_admin_column" => true,
            "show_in_rest" => true,
            "show_tagcloud" => false,
            "rest_base" => "nomination_author",
            "rest_controller_class" => "WP_REST_Terms_Controller",
            "rest_namespace" => "wp/v2",
            "show_in_quick_edit" => true,
            "sort" => true,
            "show_in_graphql" => false,
        ];
        register_taxonomy( "nomination_author", [ "wp_nomination" ], $args );
		
		
    }
    

}

new PostType();