<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<?php 
		global $post;
		setup_postdata( $post );
		$post_id = $post->ID;
	?>

	<div class="home-wrapper constrain">

		<div class="home-slider-wrapper">
			<?php layerslider(1) ?>
		</div>

		<div class="about">
			<h1 class="title"><?php echo get_post_meta($post_id, 'wpcf-home-page-title', true); ?></h1>
			<?php echo get_post_meta($post_id, 'wpcf-home-page-text', true); ?>
		</div>

		<div class="grid-row">
			<div class="unit1of2 video">
				<div class="table">
					<div class="table-cell">
						<a class="youtube icon-play" href="<?php echo get_post_meta($post_id, 'wpcf-youtube-url', true); ?>"></a>
					</div>
				</div>
			</div>
			<div class="unit1of2 why-we-give">
				<div class="table">
					<div class="table-cell">
						<h3 class="section-title"><?php echo get_post_meta($post_id, 'wpcf-box-1-title', true); ?></h3>
						<?php echo get_post_meta($post_id, 'wpcf-box-1-main-text', true); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="grid-row">
			<div class="unit1of2 upcoming-events">
				<div class="table">
					<div class="table-cell">
						<h3 class="section-title"><?php echo get_post_meta($post_id, 'wpcf-box-2-title', true); ?></h3>
						<?php echo get_post_meta($post_id, 'wpcf-box-2-main-text', true); ?>
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
						  'post_type' => 'event',
						  'meta_key'     => 'wpcf-show-event-on-homepage',
		  				'meta_value'  => 1
						));

			  		$count = 0; 

			  		foreach($myposts as $post) :
			    		setup_postdata( $post );
							$post_id = $post->ID;
							$count = $count + 1;
							$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					?>
						<? if ($feat_image != "") { ?>
							<div class="slider-slide" style="background-image:url(<?= $feat_image ?>);">
						<? } else { ?>
							<div class="slider-slide" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg');">
						<? } ?>
							<div class="text-wrapper">
								<h4 class="name"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h4>
								<? $begin_date = new DateTime(get_post_meta($post_id, '_event_start_date', true)); ?>
								<? $begin_date = date_format($begin_date, "F j, Y"); ?>
								<h5 class="description"><?= $begin_date; ?></h5>
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