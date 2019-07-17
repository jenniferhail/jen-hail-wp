<?php
    // =========================================================================
    // HELPER FUNCTIONS
    // =========================================================================
    require_once dirname(__FILE__) . '/functions/helpers.php';

    // =========================================================================
    // WORDPRESS HOOKS AND FUNCTIONS
    // =========================================================================
    require_once dirname(__FILE__) . '/functions/wp/base.php';
    require_once dirname(__FILE__) . '/functions/wp-hooks.php';

    // =========================================================================
    // ADVANCED CUSTOM FIELDS
    // =========================================================================
    require_once dirname(__FILE__) . '/functions/acf/options.php';

    // =========================================================================
    // CUSTOM POST TYPES
    // =========================================================================
    require_once dirname(__FILE__) . '/functions/cpt/event.php';
    require_once dirname(__FILE__) . '/functions/cpt/faq.php';
    require_once dirname(__FILE__) . '/functions/cpt/product.php';
    // require_once dirname(__FILE__) . '/functions/cpt/recipe.php';
