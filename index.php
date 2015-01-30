<?php get_header(); ?>

<!-- 	<div id="fullscreen-overlay" style="display:none;">
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
	</div> -->
	<div class="page-wrapper constrain">
		<!-- section -->
		<section class="page-body" style="background:transparent;padding:0;">

			<?php
				if ( 'page' == get_option('show_on_front') && get_option('page_for_posts') && is_home() ) : the_post();
					$page_for_posts_id = get_option('page_for_posts');
					setup_postdata(get_page($page_for_posts_id));
					$post_id = get_page($page_for_posts_id)->ID;
				?>
					<div class="video-banner">
						<?php $youtube_url = get_post_meta($post_id, 'wpcf-youtube-url', true); ?>
						<?php if ($youtube_url != "") { ?>
							<div class="table">
								<div class="table-cell">
									<a class="youtube icon-play" href="<? echo $youtube_url; ?>"></a>
								</div>
							</div>
						<? } ?>
					</div>
					<div class="post-index-page-text richtext">
						<div id="post-<?php the_ID(); ?>" class="page">
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
					<div class="post-index-more-text richtext">
						<h4 class="section-title">Your Passion — Our Mission</h4>
						<p>Every day we see donor gifts in action and making the difference. It all begins with your passion. Where do you want to make a difference? Children’s Hospital, cancer care, senior care, clinical &amp; technical breakthroughs, emergency medicine, etc.</p>
					</div>
				<?php
					rewind_posts();
				endif;
			?>

			<?php get_template_part('patient_grid'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>

<style>
	.ui-widget-overlay {
		background: #000 !important;
	}
</style>

<script src="<?php echo get_template_directory_uri(); ?>/js/lib/imagesLoaded.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/masonry.js" type="text/javascript"></script>

<script>



(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

			$("a.youtube").YouTubePopup({ hideTitleBar: true, showBorder: false, height: 390, overlayOpacity: 0.8 });

			var transitionProp = getStyleProperty('transition');
			var transitionEndEvent = {
			  WebkitTransition: 'webkitTransitionEnd',
			  MozTransition: 'transitionend',
			  OTransition: 'otransitionend',
			  transition: 'transitionend'
			}[ transitionProp ];

			$( function() {

			  var $container = $('.post-grid-wrapper');

			  var clicked = false;

			  $container.imagesLoaded( function() {

			  	if ( $(window).width() > 600 ) {
			  		$container.masonry({
					    itemSelector: '.post-box',
					    columnWidth: '.grid-sizer'
					  });
			  	}
			  	
			  });

			  $(window).resize(function() {
			  	if ( $(window).width() > 600 ) {
			  		$container.masonry({
					    itemSelector: '.post-box',
					    columnWidth: '.grid-sizer'
					  });
					  $container.find(".blurb").css("display","");
			  	}
			  	else {
			  		$container.masonry('destroy');
			  	}
			  });

			  $container.on('click', '.btn.read-more', function(event) {
			  	window.location = $(this).attr("href");
			  	clicked = true;
			  });
			  	

			  $container.on( 'click', '.container', function( event ) {

			  	event.preventDefault();
			  	var $this = $(this);

			  	if (!clicked && $(window).width() > 600) {

				    var previousContentSize = getSize( this );
				    // disable transition
				    this.style[ transitionProp ] = 'none';
				    // set current size
				    $this.css({
				      width: previousContentSize.width,
				      height: previousContentSize.height
				    });

				    

				    if ( $this.parent().hasClass('big') ) {              // this one is already big
				    	$(".post-box").removeClass("big");                 // make all small
				    	var $itemElem = $this.parent().removeClass('big'); // make this one small
				    }
				    else {                                               // this one is small
				    	$(".post-box").removeClass("big");                 // make all small
				    	var $itemElem = $this.parent().addClass('big');    // make this one big
				    }
				    
				    // force redraw
				    var redraw = this.offsetWidth;

				    // renable default transition
				    this.style[ transitionProp ] = '';

				    // reset 100%/100% sizing after transition end
				    if ( transitionProp ) {
				      var _this = this;
				      var onTransitionEnd = function() {
				        _this.style.width = '';
				        _this.style.height = '';
				      };
				      $this.one( transitionEndEvent, onTransitionEnd );
				    }

				    // set new size
				    var size = getSize( $itemElem[0] );
				    $this.css({
				      width: size.width,
				      height: size.height
				    });

				    $container.masonry();

			  	}

			  	else if ( !clicked && $(window).width() < 600 ) {

			  		if ( $this.parent().hasClass('show-blurb') ) {              // this one is already big
				    	$(".post-box").removeClass("show-blurb");                 // make all small
				    	$container.find(".blurb").slideUp();
				    	var $itemElem = $this.parent().removeClass('show-blurb'); // make this one small
				    	$this.find(".blurb").slideUp();
				    }
				    else {                                               // this one is small
				    	$(".post-box").removeClass("show-blurb");                 // make all small
				    	$container.find(".blurb").slideUp();
				    	var $itemElem = $this.parent().addClass('show-blurb');    // make this one big
				    	$this.find(".blurb").slideDown();
				    }

			  	}


			  });

				// $(".post-box-link").click(function(event) {
				// 	event.preventDefault();
				// 	var name = $(this).parent().parent().find(".patient-name").html();
				// 	var subtitle = $(this).parent().parent().find(".patient-subtitle").html();
				// 	var blurb = $(this).parent().parent().find(".blurb").html();
				// 	$("#fullscreen-overlay").find("#name").html(name);
				// 	$("#fullscreen-overlay").find("#subtitle").html(subtitle);
				// 	$("#fullscreen-overlay").find("#blurb").html(blurb);
				// 	$("#fullscreen-overlay").fadeIn();
				// 	$("#fullscreen-overlay").delay(400).find(".modal-wrapper").addClass("shown");
				// });

				// $("#close-modal").click(function(event) {
				// 	event.preventDefault();
				// 	$("#fullscreen-overlay").find(".modal-wrapper").removeClass("shown");
				// 	$("#fullscreen-overlay").delay(100).fadeOut();
				// });


  
});

	});
	
})(jQuery, this);

</script>