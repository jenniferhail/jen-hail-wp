<?php
    //======================================================================
    // ACF Options Page
    //======================================================================
    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title' 	=> 'App Options',
            'menu_title'	=> 'App Options',
            'menu_slug' 	=> 'app-options',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
    }

    //======================================================================
    // SPEED UP ACF
    //======================================================================
    add_filter('acf/settings/remove_wp_meta_box', '__return_true');
?>
