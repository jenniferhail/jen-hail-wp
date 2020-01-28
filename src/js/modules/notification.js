var $ = require('jquery');

module.exports = {
	init: function () {
		$('.notification .close').on('click', function () {
			$('.notification').addClass('hide');
		});
	}
}