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
</footer>
<?php wp_footer(); ?>
</body>
</html>
