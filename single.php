<?php get_header(); ?>

<div class="page-wrapper constrain">
	<!-- section -->
	<section class="page-body" style="padding:0;">

		<div class="post-details-wrapper">
			
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<? $post_id = $post->ID; ?>

					<? $feat_image = get_post_meta($post_id, 'wpcf-banner-image', true); ?>

					<? if (empty($feat_image)) {
							$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
						}
					?>

					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					
						<div class="post-banner" style="background-image:url(<?= $feat_image ?>);"></div>

					<?php endif; ?>
					
					<div class="post-text-wrapper">
						<h1 class="post-title"><?php the_title(); ?></h1>
						<? $subtitle = get_post_meta($post_id, 'wpcf-subtitle', true); ?>
						<? $start_date = get_post_meta($post_id, '_event_start_date', true); ?>

						<? if ( $subtitle != "" ) { ?>
							<h4 class="patient-subtitle"><?= $subtitle ?></h4>
						<? } elseif ( $start_date ) { ?>
							<? $begin_date = new DateTime( $start_date ); ?>
							<? $begin_date = date_format($begin_date, "F j, Y"); ?>
							<h4 class="patient-subtitle"><?= $begin_date; ?></h4>
						<? } else { ?>
							<h4 class="patient-subtitle"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></h4>
						<? } ?>

						<div class="post-content-wrapper clearfix">
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

			<?php get_template_part('patient_stories'); ?>

		</div>

	</section>

</div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
