(function($) {
    $(window).load(function() {
        $('.flexslider').flexslider({
	            animation: 'slide',
	            slideshowSpeed: 6000,
				controlNav: false,  
				directionNav: false,
			    controlsContainer: '.flex-container',
			    touch: false,
			    start: function(){
			       $('.overlay').fadeIn(800);
			    },
	    });
    });
})(jQuery)