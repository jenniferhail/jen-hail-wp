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
		// Optional - Expose scoped vars to global $. Use in console with $.expose
		$.expose.ac = ac;
		$.expose.accordions = accordions;
		console.log('accordions loaded!');
	},
	bindUIActions: function() {
		ac.title.on('click', function() {
			$(this).closest('.acc-item').find('.acc-content').slideToggle( '3000', function() {
				// Animation complete.
			});
		});
	}
};
