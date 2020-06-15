// var DirectionReveal = require('./modules/vendor-direction-reveal.js');

module.exports = {
	init: function () {

        // Detect Closest Edge
        function closestEdge(x,y,w,h) {
            var topEdgeDist = distMetric(x,y,w,0);
            var bottomEdgeDist = distMetric(x,y,w,h);
            var min = Math.min(topEdgeDist,bottomEdgeDist);
            switch (min) {
                case topEdgeDist:
                    return 'top';
                case bottomEdgeDist:
                    return 'bottom';
            }
        }

        // Distance Formula
        function distMetric(x,y,x2,y2) {
            var xDiff = x - x2;
            var yDiff = y - y2;
            return (xDiff * xDiff) + (yDiff * yDiff);
        }

        var boxes = document.querySelectorAll('.project');
        for (var i = 0; i < boxes.length; i++) {

            boxes[i].onmouseenter = function(e){
                
                var x = e.pageX - this.offsetLeft;
                var y = e.pageY - this.offsetTop;
                var edge = closestEdge(x,y,this.clientWidth, this.clientHeight);
                var image = this.querySelector('.image');
                var overlay = this.querySelector('.overlay');

                switch(edge) {
                    case 'top':
                        overlay.style.top = '-100%';
                        overlay.style.left = '0%';
                        //tween overlay from the right
                        TweenMax.to(overlay, .5, {top: '0%'});
                        TweenMax.to(image, .5, {scale: 1.2});
                        break;
                    case 'bottom':
                        overlay.style.top = '100%';
                        overlay.style.left = '0%';
                        //tween overlay from the right
                        TweenMax.to(overlay, .5, {top: '0%'});
                        TweenMax.to(image, .5, {scale: 1.2});
                        break;
                }
            };


            boxes[i].onmouseleave = function(e){
                var x = e.pageX - this.offsetLeft;
                var y = e.pageY - this.offsetTop;
                var edge = closestEdge(x,y,this.clientWidth, this.clientHeight);
                var image = this.querySelector('.image');
                var overlay = this.querySelector('.overlay');

                switch(edge) {
                    case 'top':
                        TweenMax.to(overlay, .5, {top: '-100%'});
                        TweenMax.to(image, .5, {scale: 1.0});
                        break;
                    case 'bottom':
                        TweenMax.to(overlay, .5, {top: '100%'});
                        TweenMax.to(image, .5, {scale: 1.0});
                        break;
                }
            };
        }

	}
}

