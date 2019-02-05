<?php
    // =========================================================================
    // REGISTER & ENQUEUE
    // =========================================================================
    function mighty_resources(){
        $css_file = get_stylesheet_directory() . '/app/assets/css/style.min.css';
        wp_enqueue_style('mightily-css', get_template_directory_uri() . '/app/assets/css/style.min.css', '', date("m.d.Y.H.i.s", filemtime($css_file)));

        wp_deregister_script('jquery');
        wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"), '', '2.2.4', true);
        wp_enqueue_script('jquery');

        $js_file = get_stylesheet_directory() . '/app/assets/js/scripts.min.js';
        wp_enqueue_script('mightily-js', get_template_directory_uri() . '/app/assets/js/scripts.min.js', 'jquery', date("m.d.Y.H.i.s", filemtime($js_file)), true );
    }
    add_action('wp_enqueue_scripts', 'mighty_resources');
?>
