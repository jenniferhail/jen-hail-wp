/*!
 * mightily v2.0.0
 * Doing less to make more.
 * (c) 2019 Chris Miller
 * MIT License
 * https://bitbucket.org/mightily/theme-development/src/master/
 */

jQuery(document).ready((function ($) {

    // =require layouts/accordion.js

    if($('#app').length) {
        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!',
            }
        });
    }
    
}));
