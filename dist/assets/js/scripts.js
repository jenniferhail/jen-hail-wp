/*!
 * mightily v2.0.0
 * Doing less to make more.
 * (c) 2019 Chris Miller
 * MIT License
 * https://bitbucket.org/mightily/theme-development/src/master/
 */

$( document ).ready((function() {
    'use strict';

	var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!',
        }
    });

	// $('select').selectmenu();

    accordions.init();
    cookieNotice.init();
    notification.init();
    randomQuote.init();
    glide.init();
    rellax.init();
    aos.init();
	styleGuide.init();
}));
