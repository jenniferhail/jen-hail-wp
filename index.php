<?php get_header(); ?>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<section class="layout">
			<div class="wrapper">
				<div class="row">
					<div class="col">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
