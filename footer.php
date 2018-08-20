<footer>
    <!-- Insert content here -->
    <?php
        $args = array(
            'menu' => 'footer-menu',
            'container' => 'false',
            'items_wrap' => '%3$s'
        );
     ?>
    <?php wp_nav_menu($args); ?>

    <div class="copyright">
        <p><?php the_field('footer_content', 'option'); ?></p>
    </div>

    <?php if( have_rows('footer_social', 'option') ): ?>

    	<ul class="social-list">

    	<?php while( have_rows('footer_social', 'option') ): the_row(); ?>
            <?php
                $network = get_sub_field('network');
                $link = get_sub_field('link');
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'];

                if ($link_target == NULL) {
                    $link_target = '_self';
                }
            ?>
    		<li class="social-item">
                <?php if ($network == 'facebook'): ?>
                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
                <?php elseif ($network == 'twitter'): ?>
                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
                <?php elseif ($network == 'instagram'): ?>
                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
                <?php elseif ($network == 'snapchat'): ?>
                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
                <?php elseif ($network == 'pinterest'): ?>
                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
                <?php elseif ($network == 'googleplus'): ?>
                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
                <?php elseif ($network == 'linkedin'): ?>
                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
                <?php elseif ($network == 'youtube'): ?>
                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
                <?php elseif ($network == 'vimeo'): ?>
                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
                <?php endif; ?>
    		</li>

    	<?php endwhile; ?>

    	</ul>

    <?php endif; ?>

</footer>

<?php if (get_field('popup_display', 'option')): ?>
    <div class="option popup" data-delay="<?php the_field('popup_delay', 'option'); ?>" data-duration="<?php the_field('popup_duration', 'option'); ?>">
        <div class="wrapper">
            <div class="content">
                <h3><?php the_field('popup_title', 'option'); ?></h3>
                <?php the_field('popup_content', 'option'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
