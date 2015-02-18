<div class="grid-row patient-stories-grid">
	<div class="unit1of4 patient-stories">
		<div class="table">
			<div class="table-cell">
				<?php echo do_shortcode('[contentblock id=patient_stories_text]') ?>
			</div>
		</div>
	</div>

	<?php
		global $post;
		$myposts = get_posts(array(
		  'numberposts' => 3,
		  'post_type' => 'Patient',
		  'meta_key'     => 'wpcf-featured',
		  'meta_value'  => 1
		));

		$count = 0; 

		foreach($myposts as $post) :
  		setup_postdata( $post );
			$post_id = $post->ID;
			$count = $count + 1;
			$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	?>

	<a class="unit1of4 patient" href="<?php the_permalink(); ?>" style="background-image:url(<?php echo
	 $feat_image ?>);">
		<div class="overlay"></div>
		<div class="text-wrapper">
			<h4 class="name"><?php echo
	 get_post_meta($post_id, 'wpcf-name', true); ?></h4>
			<h5 class="patient-about"><?php echo
	 get_post_meta($post_id, 'wpcf-subtitle', true); ?></h5>
		</div>
	</a>

	<?php endforeach; ?>

	<?php wp_reset_postdata(); ?>
</div>