(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		

		$("a.youtube").YouTubePopup({ hideTitleBar: true, showBorder: false, height: 390, overlayOpacity: 0.8 });

		$("#did-you-know-slider").liquidSlider({
			autoHeight: false,
			dynamicArrows: false,
			dynamicTabs: false,
			autoSlide: true,
			autoSlideInterval: 8000,
			slideEaseFunction: "easeInOutCubic"
		});
		var api = $.data( $('#did-you-know-slider')[0], 'liquidSlider');
		$(".did-you-know-slider-wrapper").find("#nav-left").click(function(event) {
			event.preventDefault();
      api.setNextPanel('left');
      api.updateClass($(this)); 
    });
    $(".did-you-know-slider-wrapper").find("#nav-right").click(function(event) {
    	event.preventDefault();
      api.setNextPanel('right');
      api.updateClass($(this)); 
    });

    $("#event-slider").liquidSlider({
			autoHeight: false,
			dynamicArrows: false,
			dynamicTabs: false,
			autoSlide: true,
			autoSlideInterval: 6000,
			slideEaseFunction: "easeInOutCubic"
		});
		var api2 = $.data( $('#event-slider')[0], 'liquidSlider');
		$(".featured-event").find("#nav-left").click(function(event) {
			event.preventDefault();
      api2.setNextPanel('left');
      api2.updateClass($(this)); 
    });
    $(".featured-event").find("#nav-right").click(function(event) {
    	event.preventDefault();
      api2.setNextPanel('right');
      api2.updateClass($(this)); 
    });
		
	});
	
})(jQuery, this);
