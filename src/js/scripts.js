jQuery(document).ready(function ($) {

    // =require layouts/accordion.js

    if($('#app').length) {
        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!',
            }
        });
    }
    
});
