<?php
    //======================================================================
    // REPLACE EXCERPT
    //======================================================================
    function new_excerpt_more($more) {
           global $post;
    	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> ...read more.</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    // =========================================================================
    // ADD RSS LINKS TO HEAD SECTION
    // =========================================================================
    add_theme_support('automatic-feed-links');

    // =========================================================================
    // REMOVE JUNK FROM HEAD AND STUFF
    // =========================================================================
    remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
    remove_action('wp_head', 'wp_generator'); // remove wordpress version

    remove_action('wp_head', 'feed_links', 2); // remove rss feed links
    remove_action('wp_head', 'feed_links_extra', 3); // remove all extra rss feed links

    remove_action('wp_head', 'index_rel_link'); // remove link to index page
    remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)

    remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
    remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

    remove_action('wp_head', 'rest_output_link_wp_head'); // remove JSON link from head
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );

    // =========================================================================
    // REGISTERING SIDEBAR
    // =========================================================================
    // if (function_exists('register_sidebar')) {
    //     register_sidebar(array(
    //         'name' => 'Sidebar Widgets',
    //         'id'   => 'sidebar-widgets',
    //         'description'   => 'These are widgets for the sidebar.',
    //         'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //         'after_widget'  => '</div>',
    //         'before_title'  => '<h2>',
    //         'after_title'   => '</h2>'
    //     ));
    // }

    // =========================================================================
    // HIDE ADMIN BAR ON FRONTEND
    // =========================================================================
    ## add_filter('show_admin_bar', '__return_false');

    // =========================================================================
    // ENABLES FEATURED IMAGES FOR PAGES AND POSTS
    // =========================================================================
    add_theme_support('post-thumbnails');

    // =========================================================================
    // ENABLES 100% JPEG QUALITY
    // =========================================================================
    // Wordpress will compress uploads to 90% of their original size
    add_filter( 'jpg_quality', 'high_jpg_quality' );
        function high_jpg_quality() {
        return 100;
    }

    // =========================================================================
    // TITLE TAG - RECOMMENDED
    // =========================================================================
    function theme_slug_setup() {
       add_theme_support( 'title-tag' );
    }
    add_action( 'after_setup_theme', 'theme_slug_setup' );

    // =========================================================================
    // WORDPRESS CONTENT WIDTH - REQUIRED
    // =========================================================================
    if ( ! isset( $content_width ) ) {
        $content_width = 1200;
    }

    // =========================================================================
    // ADD NEW IMAGE SIZES WHEN UPLOADING MEDIA
    // =========================================================================
    ## add_image_size( 'cropped-blog', 370, 220, array( 'center', 'center' ) );

    // =========================================================================
    // REGISTER MENUS
    // =========================================================================
    ## register_nav_menu( 'desktop', 'Desktop Menu' );
    ## register_nav_menu( 'mobile', 'Mobile Menu' );
?>
