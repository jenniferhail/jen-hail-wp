<?php
    // =========================================================================
    // VARS
    // =========================================================================
    global $template_url;
    global $site_url;

    $template_url = get_template_directory_uri();
    $site_url = get_site_url();

    // =========================================================================
    // REGISTER & ENQUEUE
    // =========================================================================
    function mightilyScripts(){
        wp_enqueue_style('mightily-css', $template_url . '/css/main.min.css', '', '1.0.2');

        wp_deregister_script('jquery');
        wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"), '', '2.2.4', true);
        wp_enqueue_script('jquery');

        wp_enqueue_script('mightily-js', $template_url . '/js/main.min.js', 'jquery', '1.0.2', true );
    }
    add_action('wp_enqueue_scripts', 'mightilyScripts');

    //======================================================================
	// META TAGS
	//======================================================================
	// Adding meta so that we can load it in non Wordpress pages i.e. Netforum
	function add_meta_tags() {
		echo '<meta name="viewport" content="width=device-width,initial-scale=1" />' . "\n";
	}
	add_action('wp_head', 'add_meta_tags', 1);
?>
