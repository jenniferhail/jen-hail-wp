<!doctype html>
<?php $site_url = site_url(); ?>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php } ?>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php if (get_field('notification_display', 'option')): ?>
	    <div class="option notification">
			<button class="close">Close</button>
	        <div class="wrapper">
	            <div class="content">
	                <?php the_field('notification_content', 'option'); ?>
	            </div>
	        </div>
	    </div>
	<?php endif; ?>

	<?php if (get_field('cookie_notice_display', 'option')): ?>
		<div class="option cookie-notice">
			<button class="close">Close</button>
			<div class="wrapper">
				<div class="content">
					<p><?php the_field('cookie_notice_content', 'option'); ?></p>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php
		$args = array(
			'menu' => 'main-menu',
			'container' => 'false',
			'items_wrap' => '%3$s'
		);
	 ?>
	<?php wp_nav_menu($args); ?>
