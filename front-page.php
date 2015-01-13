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
						<a class="youtube" href="<?php echo do_shortcode('[contentblock id=homepage_video_url]') ?>">&#10148;</a>
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
							$count = $count + 1
					?>

						<div class="slider-slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/event.jpg);">
							<div class="text-wrapper">
								<h4 class="name"><a href="#"><? the_title(); ?></a></h4>
								<h5 class="description"><? echo get_post_meta($post_id, '_location_address', true); ?></h5>
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

		<div class="grid-row patients">
			<div class="unit1of4 patient-stories">
				<div class="table">
					<div class="table-cell">
						<?php echo do_shortcode('[contentblock id=homepage_box_3_text]') ?>
					</div>
				</div>
			</div>
			<div class="unit1of4 patient" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/patient.jpg);">
				<div class="overlay"></div>
				<div class="text-wrapper">
					<h4 class="name">James Vanhoult</h4>
					<h5 class="patient-about">Cancer Survivor</h5>
				</div>
			</div>
			<div class="unit1of4 patient" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/patient.jpg);">
				<div class="overlay"></div>
				<div class="text-wrapper">
					<h4 class="name">James Vanhoult</h4>
					<h5 class="patient-about">Cancer Survivor</h5>
				</div>
			</div>
			<div class="unit1of4 patient" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/patient.jpg);">
				<div class="overlay"></div>
				<div class="text-wrapper">
					<h4 class="name">James Vanhoult</h4>
					<h5 class="patient-about">Cancer Survivor</h5>
				</div>
			</div>
		</div>

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
						$count = $count + 1
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