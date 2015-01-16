<?php get_header(); ?>

	<div id="fullscreen-overlay" style="display:none;">
		<div class="table">
			<div class="table-cell">
				<div class="modal-wrapper">
					<div class="modal">
						<a href="#" id="close-modal" class="icon-close"></a>
						<h3 id="name"></h3>
						<h5 id="subtitle"></h5>
						<p id="blurb"></p>
						<a href="#" class="read-more btn">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-wrapper constrain">
		<!-- section -->
		<section class="page-body">

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/lib/imagesLoaded.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/masonry.js" type="text/javascript"></script>

<script>



(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		//   var container = document.querySelector('.post-grid-wrapper');
		// 	var msnry;
		// 	// initialize Masonry after all images have loaded
		// 	imagesLoaded( container, function() {
		// 	  msnry = new Masonry( container, {
		// 	  	columnWidth: ".grid-sizer",
		// 	  	itemSelector: ".post-box"
		// //	  	gutter: ".gutter-sizer"
		// 	  });
		// 	});

		// 	$(document).ready(function() {
		// 		$(".post-box-link").click(function(event) {
		// 			event.preventDefault();
		// 			console.log("click event");
		// 	//		$(".post-box").removeClass("big");
		// 			if ( $(this).parent().parent().hasClass("big") ) {
		// 				console.log("true");
		// 				$(".post-box").removeClass("big");
		// 			}
		// 			else {
		// 				$(".post-box").removeClass("big");
		// 				$(this).parent().parent().addClass("big");
		// 			}
					
		// 		//	$(this).parent().parent().toggleClass("big");
		// 			msnry.layout();
		// 		});
		// 	});

	// http://masonry.desandro.com/masonry.pkgd.js added as external resource

			var transitionProp = getStyleProperty('transition');
			var transitionEndEvent = {
			  WebkitTransition: 'webkitTransitionEnd',
			  MozTransition: 'transitionend',
			  OTransition: 'otransitionend',
			  transition: 'transitionend'
			}[ transitionProp ];

			$( function() {

			  var $container = $('.post-grid-wrapper').masonry({
			    itemSelector: '.post-box',
			    columnWidth: '.grid-sizer'
			  });

			  // $container.on( 'click', '.container', function( event ) {
			  // 	event.preventDefault();
			  //   var $this = $(this);
			  //   var previousContentSize = getSize( this );
			  //   // disable transition
			  //   this.style[ transitionProp ] = 'none';
			  //   // set current size
			  //   $this.css({
			  //     width: previousContentSize.width,
			  //     height: previousContentSize.height
			  //   });

			    

			  //   if ( $this.parent().hasClass('big') ) {              // this one is already big
			  //   	$(".post-box").removeClass("big");                 // make all small
			  //   	var $itemElem = $this.parent().removeClass('big'); // make this one small
			  //   }
			  //   else {                                               // this one is small
			  //   	$(".post-box").removeClass("big");                 // make all small
			  //   	var $itemElem = $this.parent().addClass('big');    // make this one big
			  //   }
			    
			  //   // force redraw
			  //   var redraw = this.offsetWidth;

			  //   // renable default transition
			  //   this.style[ transitionProp ] = '';

			  //   // reset 100%/100% sizing after transition end
			  //   if ( transitionProp ) {
			  //     var _this = this;
			  //     var onTransitionEnd = function() {
			  //       _this.style.width = '';
			  //       _this.style.height = '';
			  //     };
			  //     $this.one( transitionEndEvent, onTransitionEnd );
			  //   }

			  //   // set new size
			  //   var size = getSize( $itemElem[0] );
			  //   $this.css({
			  //     width: size.width,
			  //     height: size.height
			  //   });

			  //   $container.masonry();

			  // });

				$(".post-box-link").click(function(event) {
					event.preventDefault();
					var name = $(this).parent().parent().find(".patient-name").html();
					var subtitle = $(this).parent().parent().find(".patient-subtitle").html();
					var blurb = $(this).parent().parent().find(".blurb").html();
					$("#fullscreen-overlay").find("#name").html(name);
					$("#fullscreen-overlay").find("#subtitle").html(subtitle);
					$("#fullscreen-overlay").find("#blurb").html(blurb);
					$("#fullscreen-overlay").fadeIn();
					$("#fullscreen-overlay").delay(400).find(".modal-wrapper").addClass("shown");
				});

				$("#close-modal").click(function(event) {
					event.preventDefault();
					$("#fullscreen-overlay").find(".modal-wrapper").removeClass("shown");
					$("#fullscreen-overlay").delay(100).fadeOut();
				});
  
});

	});
	
})(jQuery, this);

</script>