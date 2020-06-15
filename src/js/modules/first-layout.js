var $ = require('jquery');

module.exports = {
	init: function () {
		// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
        var vh = window.innerHeight * 0.01;
        console.log(vh + 'px');
        // Then we set the value in the --vh custom property to the root of the document
        $('.home .layout:first-of-type').css('--vh', vh + 'px');
	}
}