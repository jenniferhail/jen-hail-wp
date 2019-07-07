<?php get_header(); ?>

<section class="layout basic-content">
    <div class="wrapper">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('wrapper'); ?>>
                <h1 class="title"><?php the_title(); ?></h1>
                <div class="the-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
