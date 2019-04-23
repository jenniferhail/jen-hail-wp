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
		$('section.layout').each(function () {
	        var i = $(this).attr('id');
	        $('.style-guide-nav ul').append('<li><a href="#' + i + '">' + i + '</a></li>');
	    });
	}
};
