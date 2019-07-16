<?php if(acf_activated()) : ?>
    <footer>
    
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
                        <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

    </footer>
<?php endif; ?>

<?php if (acf_activated() && get_field('popup_display', 'option')): ?>
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
