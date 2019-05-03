<?php
    function faqs() {
        $labels = [
            'name'                  => _x('FAQs', 'Post Type General Name', 'text_domain'),
            'singular_name'         => _x('FAQ', 'Post Type Singular Name', 'text_domain'),
            'menu_name'             => __('FAQs', 'text_domain'),
            'name_admin_bar'        => __('FAQs', 'text_domain'),
            'archives'              => __('Item Archives', 'text_domain'),
            'attributes'            => __('Item Attributes', 'text_domain'),
            'parent_item_colon'     => __('Parent FAQ:', 'text_domain'),
            'all_items'             => __('All FAQs', 'text_domain'),
            'add_new_item'          => __('Add New FAQ', 'text_domain'),
            'add_new'               => __('Add FAQ', 'text_domain'),
            'new_item'              => __('New FAQ', 'text_domain'),
            'edit_item'             => __('Edit FAQ', 'text_domain'),
            'update_item'           => __('Update FAQ', 'text_domain'),
            'view_item'             => __('View FAQ', 'text_domain'),
            'view_items'            => __('View FAQs', 'text_domain'),
            'search_items'          => __('Search FAQs', 'text_domain'),
            'not_found'             => __('Not found', 'text_domain'),
            'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
            'featured_image'        => __('Featured Image', 'text_domain'),
            'set_featured_image'    => __('Set featured image', 'text_domain'),
            'remove_featured_image' => __('Remove featured image', 'text_domain'),
            'use_featured_image'    => __('Use as featured image', 'text_domain'),
            'insert_into_item'      => __('Insert into item', 'text_domain'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
            'items_list'            => __('Items list', 'text_domain'),
            'items_list_navigation' => __('Items list navigation', 'text_domain'),
            'filter_items_list'     => __('Filter items list', 'text_domain'),
        ];
        $args = [
            'label'                 => __('FAQ', 'text_domain'),
            'description'           => __('A collection of drink recipes.', 'text_domain'),
            'labels'                => $labels,
            'supports'              => [ 'title', 'editor' ],
            'taxonomies'            => [ 'recipe_categories' ],
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 20,
            'menu_icon'             => 'dashicons-format-chat',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        ];
        register_post_type('faqs', $args);
    }
    add_action('init', 'faqs', 0);

    // Register Custom Taxonomy
    function faq_categories() {
        $labels = [
            'name'                       => _x('FAQ Categories', 'Taxonomy General Name', 'text_domain'),
            'singular_name'              => _x('FAQ Category', 'Taxonomy Singular Name', 'text_domain'),
            'menu_name'                  => __('FAQ Category', 'text_domain'),
            'all_items'                  => __('All Items', 'text_domain'),
            'parent_item'                => __('Parent Item', 'text_domain'),
            'parent_item_colon'          => __('Parent Item:', 'text_domain'),
            'new_item_name'              => __('New Item Name', 'text_domain'),
            'add_new_item'               => __('Add New Item', 'text_domain'),
            'edit_item'                  => __('Edit Item', 'text_domain'),
            'update_item'                => __('Update Item', 'text_domain'),
            'view_item'                  => __('View Item', 'text_domain'),
            'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
            'add_or_remove_items'        => __('Add or remove items', 'text_domain'),
            'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
            'popular_items'              => __('Popular Items', 'text_domain'),
            'search_items'               => __('Search Items', 'text_domain'),
            'not_found'                  => __('Not Found', 'text_domain'),
            'no_terms'                   => __('No items', 'text_domain'),
            'items_list'                 => __('Items list', 'text_domain'),
            'items_list_navigation'      => __('Items list navigation', 'text_domain'),
        ];
        $args = [
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        ];
        register_taxonomy('faq_categories', [ 'faq' ], $args);
    }
    add_action('init', 'faq_categories', 0);
