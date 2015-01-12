<?php get_header(); ?>

	<div class="home-wrapper constrain">

		<div class="home-slider-wrapper">
			<?php layerslider(1) ?>
		</div>

		<div class="about">
			<h1 class="title">Sacred Heart Foundation</h1>
			<p>Sacred Heart Foundation donors, staff, and volunteers make the difference every day, for every life touched by Sacred Heart Health System. Together, we support this vital ministry and continue a legacy of charity that is impacting thousands of lives across the Gulf Coast — turning no one in need away.</p>
		</div>

		<div class="grid-row">
			<div class="unit1of2 video">
				<div class="table">
					<div class="table-cell">
						<a class="youtube" href="https://www.youtube.com/watch?v=pOnnmCzBFnE">&#10148;</a>
					</div>
				</div>
			</div>
			<div class="unit1of2 why-we-give">
				<div class="table">
					<div class="table-cell">
						<h3 class="section-title">Why We Give</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vero sequi repellat magnam possimus hic maxime nesciunt. Et quia delectus porro corporis laudantium, qui, iste nesciunt ullam quis assumenda eaque.</p>
						<a href="#" class="give-now">Give Now &#10095;</a>
					</div>
				</div>
			</div>
		</div>

		<div class="grid-row">
			<div class="unit1of2 upcoming-events">
				<div class="table">
					<div class="table-cell">
						<h3 class="section-title">Upcoming Events</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero ratione eos sed minus quasi tenetur excepturi, omnis. Numquam dolorem voluptates commodi ipsa fuga necessitatibus quod cum, facilis, fugiat nulla? Voluptate.</p>
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
						<h3 class="section-title">Patient Stories</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla repellendus numquam sapiente, eius tenetur, enim commodi perferendis.</p>
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