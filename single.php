<?php get_header(); ?>

<?php
    $images = get_field('image_col');
?>

<section class="layout article">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('wrapper'); ?>>
            <div class="row">

                <?php if ($images) : ?>
                    <div class="image">
                    <?php foreach ($images as $image) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <div class="content">
                    <h2 class="h3 title"><?php the_title(); ?></h2>

                    <div class="meta">
                        <?php foreach (get_the_terms(get_the_ID(), 'category') as $cat): ?>
                            <span class="category"><?php echo $cat->name; ?></span>
                        <?php endforeach; ?>                        
                        <span class="date"><?php the_date('F Y'); ?></span>
                    </div>

                    <?php the_content(); ?>
                </div>

            </div>
        </article>
    <?php endwhile; endif; ?>  

</section>

<?php get_footer(); ?>
