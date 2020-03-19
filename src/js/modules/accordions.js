var $ = require('jquery');

module.exports = {
	init: function () {
		$('.accordion .title').on('click', function () {
			$(this).closest('.acc-item').find('.content').slideToggle('3000', function () {
				// Animation complete.
			});
		});
	}
}