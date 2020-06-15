var $ = require('jquery');
var anime = require('animejs');

module.exports = {
	init: function () {
        
        var fade = function($id) {
            // Fade out
            var layout = document.getElementById($id);
            if (layout) {
                layout.classList.add('fade-out');
            }

            // Fade in
            var waypoint = new Waypoint({
                element: document.getElementById($id),
                handler: function(direction) {
                    if (direction == 'down') {
                        anime({
                            targets: '#' + $id,
                            opacity: 1,
                            easing: 'easeInCubic',
                            duration: 500
                        });
                    } else {
                        anime({
                            targets: '#' + $id,
                            opacity: 0,
                            easing: 'easeInCubic',
                            duration: 500
                        });
                    }
                },
                offset: '75%'
            });
        }

        fade('about');
        fade('work');
        fade('notes');

        var arrayFade = function($el) {
            // Fade out array
            // var els = document.querySelectorAll($el);
            // if (els.length) {
            //     els.forEach( function(item) {
            //         item.classList.add('fade-out');
            //     });
            // }

            // Fade in array
            $(window).on('load', function() {
                anime({
                    targets: $el,
                    opacity: 1,
                    easing: 'easeInCubic',
                    delay: anime.stagger(500, {start: 1000}, {duration: 300}, {easing: 'easeInCubic'})
                });
            });            
        }

        arrayFade('.layout.gallery img');
        arrayFade('.footer .col');

	}
}