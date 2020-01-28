var $ = require('jquery');

module.exports = {
	init: function () {
		$('.cookie-notice .close').on('click', function () {
			$('.cookie-notice').addClass('move');
			setTimeout(function () {
				$('.cookie-notice').addClass('hide');
			}, 600);
		});
	}
}