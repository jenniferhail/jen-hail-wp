var $ = require('jquery');
var accordions = require('./modules/accordions.js');
var anchors = require('./modules/anchors.js');
var styleguide = require('./modules/style-guide.js');

// Make sure that you init the styleguide first.
styleguide.init();
accordions.init();
anchors.init();