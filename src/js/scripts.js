document.addEventListener("DOMContentLoaded", function() {
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
});
