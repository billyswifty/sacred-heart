<?php get_header(); ?>

	<div class="home-wrapper constrain">

		<div class="home-slider-wrapper">
			<?php layerslider(1) ?>
		</div>

		<div class="about">
			<h1 class="title">Sacred Heart Foundation</h1>
			<?php echo do_shortcode('[contentblock id=homepage_about_text]') ?>
		</div>

		<div class="grid-row">
			<div class="unit1of2 video">
				<div class="table">
					<div class="table-cell">
						<a class="youtube icon-play" href="<?php echo do_shortcode('[contentblock id=homepage_video_url]') ?>"></a>
					</div>
				</div>
			</div>
			<div class="unit1of2 why-we-give">
				<div class="table">
					<div class="table-cell">
						<?php echo do_shortcode('[contentblock id=homepage_box_1_text]') ?>
					</div>
				</div>
			</div>
		</div>

		<div class="grid-row">
			<div class="unit1of2 upcoming-events">
				<div class="table">
					<div class="table-cell">
						<?php echo do_shortcode('[contentblock id=homepage_box_2_text]') ?>
					</div>
				</div>
			</div>
			<div class="unit1of2 featured-event">

				<div class="liquid-slider" id="event-slider">

					<?php wp_reset_postdata(); ?>

					<?
			  		global $post;
			  		$myposts = get_posts(array(
						  'numberposts' => 5,
						  'post_type' => 'event'
						));

			  		$count = 0; 

			  		foreach($myposts as $post) :
			    		setup_postdata( $post );
							$post_id = $post->ID;
							$count = $count + 1;
							$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					?>

						<div class="slider-slide" style="background-image:url(<?= $feat_image ?>);">
							<div class="text-wrapper">
								<h4 class="name"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h4>
								<h5 class="description">Event Location</h5>
							</div>
						</div>

			  	<? endforeach; ?>

			  	<?php wp_reset_postdata(); ?>

				</div>
				<div class="arrows">
					<a href="#" class="icon-left-arrow white" id="nav-left"></a>
					<a href="#" class="icon-right-arrow white" id="nav-right"></a>
				</div>
			</div>
		</div>

		<?php get_template_part('patient_stories'); ?>

		<div class="did-you-know-slider-wrapper clearfix">
			<h3 class="section-title">Did You Know</h3>
			<div class="liquid-slider" id="did-you-know-slider">
				<?
		  		global $post;
		  		$myposts = get_posts(array(
					  'numberposts' => 30,
					  'post_type' => 'did-you-know-blurb'
					));

		  		$count = 0; 

		  		foreach($myposts as $post) :
		    		setup_postdata( $post );
						$post_id = $post->ID;
						$count = $count + 1;
				?>

				  <div class="slider-slide">
						<p><? the_content(); ?></p>
					</div>

		  	<? endforeach; ?>
			</div>
			<div class="arrows">
				<a href="#" class="icon-left-arrow white" id="nav-left"></a>
				<a href="#" class="icon-right-arrow white" id="nav-right"></a>
			</div>
		</div>



	</div>

	<style>
		.ui-widget-overlay {
			background: #000 !important;
		}
	</style>

<?php get_footer(); ?>

<script>

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

</script>