var $ = require('jquery');

module.exports = {
	init: function () {
		$('.splash li').hide().eq(Math.floor(Math.random() * $('.splash li').length)).show();
	}
}