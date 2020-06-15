<!doctype html>
<?php $site_url = site_url(); ?>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<style>html{visibility: hidden;opacity:0;}</style>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<?php wp_head(); ?>

	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php } ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/dist/assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/dist/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/dist/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/dist/assets/favicon/site.webmanifest">

</head>

<body <?php body_class(); ?>>

	<header class="header">
		<div class="wrapper">
			<div class="row">
				<nav class="nav">
					<ul class="list">
						<li class="item"><a href="/#work">Work</a></li>
						<li class="item"><a href="/#notes">Notes</a></li>
					</ul>
				</nav>
				<h1 class="logo"><a href="/" target="_self">Jen Hail</a></h1>
				<div class="location">
					<ul class="list">
						<li class="item">KY</li>
						<li class="item">MI</li>
					</ul>
					<div class="note">
						I'll be moving to Detroit later this year. :)
					</div>
				</div>
			</div>
		</div>
	</header>

	<main class="main">