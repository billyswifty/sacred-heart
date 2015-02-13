<?php
/*
Template Name: Our Mission
*/
?>

<?php get_header(); ?>

	<?php 
		global $post;
		setup_postdata( $post );
		$post_id = $post->ID;
	?>

	<div class="page-wrapper our-mission constrain">

		<section class="page-body">

			<div class="top-banner" style="background-image:url(<?php echo get_post_meta($post_id, 'wpcf-our-mission-banner-image', true); ?>);"></div>

			<div class="about-text">
				<h4 class="section-title"><?php echo get_post_meta($post_id, 'wpcf-section-title', true); ?></h4>
				<?php echo get_post_meta($post_id, 'wpcf-main-body-text', true); ?>
		</div>

			<div class="grid-row vision">
				<div class="unit1of2 image" style="background-image:url(<?php echo get_post_meta($post_id, 'wpcf-secondary-image', true); ?>);"></div>
				<div class="unit1of2 legacy">
					<div class="contain">
						<div class="table">
							<div class="table-cell">
								<h4 class="section-title"><?php echo get_post_meta($post_id, 'wpcf-secondary-title', true); ?></h4>
								<?php echo get_post_meta($post_id, 'wpcf-secondary-main-text', true); ?>
								<a href="<?php echo get_post_meta($post_id, 'wpcf-button-url', true); ?>" class="give-now btn"><?php echo get_post_meta($post_id, 'wpcf-button-text', true); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="grid-row needs">
				<div class="unit1of4 greatest">
					<div class="table">
						<div class="table-cell">
							<h2 class="section-title"><?php echo get_post_meta($post_id, 'wpcf-grid-title', true); ?></h2>
						</div>
					</div>
				</div>
				<a class="unit1of4 need" href="#" style="background-image:url(<?php echo get_post_meta($post_id, 'wpcf-box-1-image', true); ?>);">
					<div class="overlay"></div>
					<div class="text-wrapper">
						<h4 class="name"><?php echo get_post_meta($post_id, 'wpcf-box-1-title', true); ?></h4>
					</div>
					<div class="need-text" style="display:none;">
						<h4 class="section-title"><?php echo get_post_meta($post_id, 'wpcf-box-1-title', true); ?></h4>
						<?php echo get_post_meta($post_id, 'wpcf-box-1-main-text', true); ?>
					</div>
				</a>
				<a class="unit1of4 need" href="#" style="background-image:url(<?php echo get_post_meta($post_id, 'wpcf-box-2-image', true); ?>);">
					<div class="overlay"></div>
					<div class="text-wrapper">
						<h4 class="name"><?php echo get_post_meta($post_id, 'wpcf-box-2-title', true); ?></h4>
					</div>
					<div class="need-text" style="display:none;">
						<h4 class="section-title"><?php echo get_post_meta($post_id, 'wpcf-box-2-title', true); ?></h4>
						<?php echo get_post_meta($post_id, 'wpcf-box-2-main-text', true); ?>
					</div>
				</a>
				<a class="unit1of4 need" href="#" style="background-image:url(<?php echo get_post_meta($post_id, 'wpcf-box-3-image', true); ?>);">
					<div class="overlay"></div>
					<div class="text-wrapper">
						<h4 class="name"><?php echo get_post_meta($post_id, 'wpcf-box-3-title', true); ?></h4>
					</div>
					<div class="need-text" style="display:none;">
						<h4 class="section-title"><?php echo get_post_meta($post_id, 'wpcf-box-3-title', true); ?></h4>
						<?php echo get_post_meta($post_id, 'wpcf-box-3-main-text', true); ?>
					</div>
				</a>
			</div>

			<div class="detail-text">
				<h4 class="section-title"><?php echo get_post_meta($post_id, 'wpcf-box-1-title', true); ?></h4>
				<?php echo get_post_meta($post_id, 'wpcf-box-1-main-text', true); ?>
			</div>

		</section>

	</div>

<?php get_footer(); ?>


<script>

	(function ($, root, undefined) {
	
		$(function () {
			
			'use strict';

			$(".need").click(function(event) {
				event.preventDefault();
				$(".detail-text").html();
				$(".detail-text").html( $(this).find(".need-text").html() );
			});


		});
		
	})(jQuery, this);

</script>
