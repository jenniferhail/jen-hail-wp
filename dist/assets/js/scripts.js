/*!
 * mightily v2.0.0
 * Doing less to make more.
 * (c) 2019 Chris Miller
 * MIT License
 * https://bitbucket.org/mightily/theme-development/src/master/
 */

var ac,
accordions = {
	settings: {
		accItem: $('.acc-item'),
		accContent: $('.acc-item .acc-content'),
		title: $('.acc-item .title')
	},
	init: function() {
		ac = this.settings;
		this.bindUIActions();
		console.log('accordions loaded!');
	},
	bindUIActions: function() {
		ac.title.on('click', (function() {
			$(this).closest('.acc-item').find('.acc-content').slideToggle( '3000', (function() {
				// Animation complete.
			}));
		}));
	}
};

var cn,
cookieNotice = {
	settings: {
		notice: $('.cookie-notice'),
		close: $('.cookie-notice .close')
	},
	init: function() {
		cn = this.settings;
		this.bindUIActions();
		console.log('cookieNotice loaded!');
	},
	bindUIActions: function() {
		cn.close.on('click', (function() {
			cn.notice.addClass('move');
			setTimeout((function(){
				cn.notice.addClass('hide');
			}), 600);
		}));
	}
};

var nf,
notification = {
	settings: {
		notice: $('.notification'),
		close: $('.notification .close')
	},
	init: function() {
		nf = this.settings;
		this.bindUIActions();
		console.log('notification loaded!');
	},
	bindUIActions: function() {
		nf.close.on('click', (function() {
			nf.notice.addClass('hide');
		}));
	}
};

var rq,
randomQuote = {
	settings: {
		quoteList: $('.splash li'),
		random: Math.floor(Math.random() * $('.splash li').length),
	},
	init: function() {
		rq = this.settings;
		this.bindUIActions();
		console.log('randomQuote loaded!');
	},
	bindUIActions: function() {
		rq.quoteList.hide().eq(rq.random).show();
	}
};

var gl,
glide = {
	settings: {

	},
	init: function() {
		gl = this.settings;
		this.bindUIActions();
		console.log('glide loaded!');
	},
	bindUIActions: function() {
		// var glide = new Glide('.glide', {
		// 	type: 'carousel',
		// 	startAt: 0,
		// 	perView: 3
		// })
		// glide.mount();
	}
};

var sg,
styleGuide = {
	settings: {
		// wrapper: document.getElementById('cards-3'),
		// myHTML: '',
	},
	init: function() {
		sg = this.settings;
		this.bindUIActions();
		console.log('style guide loaded!');
        // sct.mainScrollTop = sct.mainWindow.scrollTop();
	},
	bindUIActions: function() {
		$('section.layout').each((function () {
	        var i = $(this).attr('id');
	        $('.style-guide-nav ul').append('<li><a href="#' + i + '">' + i + '</a></li>');
	    }));
	}
};


$( document ).ready((function() {
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
}));
