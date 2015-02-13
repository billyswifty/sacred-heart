<?php
/*
Template Name: Make a Gift
*/
?>

<?php get_header(); ?>

	<?php 
		global $post;
		setup_postdata( $post );
		$post_id = $post->ID;
	?>

	<div class="page-wrapper make-a-gift constrain">

		<section class="page-body">

			<?php echo do_shortcode('[layerslider id="2"]') ?>

	

			<div class="text-wrapper">

				<h3 class="section-title"><?php echo get_post_meta($post_id, 'wpcf-section-title', true); ?></h3>

<?php echo get_post_meta($post_id, 'wpcf-main-body-text', true); ?>

				<br /><br />

				<div class="grid-row">
					<div class="unit1of2 left-align">
						<?php echo get_post_meta($post_id, 'wpcf-left-column-text', true); ?>
					</div>
					<div class="unit1of2 left-align">
						<?php echo get_post_meta($post_id, 'wpcf-right-column-text', true); ?>
					</div>
				</div>

			</div>

			<?php get_template_part('patient_stories'); ?>

		</section>

	</div>

<?php get_footer(); ?>


<script>

	(function ($, root, undefined) {
	
		$(function () {
			
			'use strict';


		});
		
	})(jQuery, this);

</script>