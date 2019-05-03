//=require layouts/accordions.js
//=require layouts/cookie-notice.js
//=require layouts/notification.js
//=require layouts/random-quote.js
//=require layouts/slider.js
//=require layouts/style-guide.js

$( document ).ready(function() {
    'use strict';

	var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!',
        }
    });

    accordions.init();
    cookieNotice.init();
    notification.init();
    randomQuote.init();
    glide.init();
	styleGuide.init();
});
