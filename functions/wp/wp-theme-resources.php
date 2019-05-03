<?php
    // =========================================================================
    // REGISTER & ENQUEUE
    // =========================================================================
    function mightyResources() {
        $css_file = get_stylesheet_directory() . '/app/assets/css/style.min.css';
        wp_enqueue_style('mightily-css', get_stylesheet_directory_uri() . '/app/assets/css/style.min.css', '', date('m.d.Y.H.i.s', filemtime($css_file)));

        wp_deregister_script('jquery');
        wp_register_script('jquery', ('//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'), '', '2.2.4', true);
        wp_enqueue_script('jquery');

        wp_enqueue_script('mightily-js', get_stylesheet_directory_uri() . '/app/assets/js/scripts.min.js', ['jquery'], '1.0.5', true);
    }

    //======================================================================
    // META TAGS
    //======================================================================
    // Adding meta so that we can load it in non Wordpress pages i.e. Netforum
    function add_meta_tags() {
        echo '<meta name="viewport" content="width=device-width,initial-scale=1" />' . "\n";
    }

    //======================================================================
    // ACF Options Page
    //======================================================================
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' 	=> 'App Options',
            'menu_title'	=> 'App Options',
            'menu_slug' 	=> 'app-options',
            'capability'	=> 'manage_sites',
            'redirect'		=> false
        ]);
    }
