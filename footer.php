<footer>
    <div class="wrapper">
        <?php $footer_logo = get_field('footer_logo', 'option'); ?>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
            <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>">
        </a>

        <?php
            $args = array(
                'menu' => 'footer-menu',
                'container' => 'false',
                'items_wrap' => '%3$s'
            );
        ?>
        <?php wp_nav_menu($args); ?>

        <?php
            $copyright_information = get_field('copyright_information', 'option');
            $copyright_information_enabled = $copyright_information['enable'];
        ?>
        
        <?php if ($copyright_information_enabled) : ?>
            <div class="copyright">
                <?php echo $copyright_information['text']; ?>
            </div>
        <?php endif; ?>
    </div>
</footer>

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
