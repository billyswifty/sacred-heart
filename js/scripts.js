(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';


		$("#close-top-nav").click(function(event) {
			event.preventDefault();
			$("header.main").find(".dropdown-nav").slideUp();
		});

		$("#show-forms").click(function(event) {
			event.preventDefault();
			$(this).next(".downloadable-forms").slideToggle();
		});

		$(".downloadable-forms a").click(function(event) {
			event.preventDefault();
			window.open($(this).attr("href"), '_blank');
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

	  $(document).ready(function() {
	  	$(".cntctfrm_label_subject").hide();
	  	$(".cntctfrm_input_subject").hide();
	  	var email_label = $(".cntctfrm_label_email");
	  	var email_input = $(".cntctfrm_input_email");
	  	var phone_label = $(".cntctfrm_label_phone");
	  	var phone_input = $(".cntctfrm_input_phone");
	  	var name_input = $(".cntctfrm_input_name");
	  	email_label.insertAfter(name_input);
	  	email_input.insertAfter(email_label);
	  	phone_label.insertAfter(email_input);
	  	phone_input.insertAfter(phone_label);
	  	$(".cntctfrm_error_text").each(function() {
	  		if ( $(this).html().indexOf("email") >= 0 ) {
	  			$(this).insertAfter(email_label);
	  		}
	  	});
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