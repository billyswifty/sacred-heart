(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';


		$("#close-top-nav").click(function(event) {
			event.preventDefault();
			$("header.main").find(".dropdown-nav").slideUp();
		});

		$('#fake-show-menu').sidr({ side: 'left' });

	  $("body > .wrapper").click( function() {
	    $.sidr('close');
	  });

	  $(".title-bar").find("#show-menu").click(function(event) {
	  	event.preventDefault();
	  	if ( $(window).width() < 800 ) {
	  		$.sidr('open');
	  	}

	  	else {
	  		$("header.main").find(".dropdown-nav").slideToggle();
	  		$(".hospital-dropdown").hide();
	  		$(".hospital-dropdown").removeClass("shown");
	  	}

	  });

	  $(".open-hospital").click(function(event) {
	  	event.preventDefault();
	  	var target = $(".hospital-dropdown#" + $(this).attr("id"));
	  	$("header.main").find(".dropdown-nav").hide();
	  	if ( target.hasClass("shown") ) {
	  		target.slideUp();
	  		target.removeClass("shown");
	  	}
	  	else {
	  		$(".hospital-dropdown").hide();
	  		$(".hospital-dropdown").removeClass("shown");
	  		target.slideDown();
	  		target.addClass("shown");
	  	}

	  });

	  $(".close-hospital-dropdown").click(function(event) {
	  	event.preventDefault();
	  	$(".hospital-dropdown").slideUp();
	  	$(".hospital-dropdown").removeClass("shown");
	  });

	});
	
})(jQuery, this);