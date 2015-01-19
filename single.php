<?php get_header(); ?>

<div class="page-wrapper constrain">
	<!-- section -->
	<section class="page-body" style="padding:0;">

		<div class="post-details-wrapper">
			
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<? $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					
						<div class="post-banner" style="background-image:url(<?= $feat_image ?>);"></div>

					<?php endif; ?>
					
					<div class="post-text-wrapper">
						<h1 class="post-title"><?php the_title(); ?></h1>

						<div class="post-content-wrapper">
							<?php the_content(); ?>
						</div>
					</div>
					
				</article>

			<?php endwhile; ?>

			<?php else: ?>

				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>

			<?php endif; ?>

			<div class="grid-row patient-stories-grid">
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

		</div>

	</section>

</div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
