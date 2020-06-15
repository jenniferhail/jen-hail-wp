var $ = require('jquery');
var anime = require('animejs');
var LazyLoad = require('vanilla-lazyload');

var accordions = require('./modules/accordions.js');
var anchors = require('./modules/anchors.js');
var animate = require('./modules/animate.js');
var direction = require('./modules/direction.js');
var first = require('./modules/first-layout.js');
var slider = require('./modules/slider.js');
var styleguide = require('./modules/style-guide.js');

// Make sure that you init the styleguide first.
// styleguide.init();
accordions.init();
anchors.init();
animate.init();
// direction.init();
first.init();
slider.init();

var myLazyLoad = new LazyLoad();
// After your content has changed...
myLazyLoad.update();