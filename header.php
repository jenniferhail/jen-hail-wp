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

	<header>
		<div class="wrapper">
			<?php $header_logo = get_field('header_logo', 'option'); ?>

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
				<img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>">
			</a>

			<nav>
				<ul>
					<?php
						$args = array(
							'menu' => 'main-menu',
							'container' => 'false',
							'items_wrap' => '%3$s'
						);
					?>
					<?php wp_nav_menu($args); ?>
				</ul>
			</nav>
		</div>
	</header>
