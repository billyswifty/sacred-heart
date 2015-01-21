<div class="post-grid-wrapper clearfix">

	<div class="gutter-sizer"></div>
	<div class="grid-sizer"></div>

	<?
		global $post;
		$myposts = get_posts(array(
		  'numberposts' => 20,
		  'category_name' => 'Patients'
		));

		$count = 0; 

		foreach($myposts as $post) :
			setup_postdata( $post );
			$post_id = $post->ID;
			$count = $count + 1
	?>

		<div id="post-<?php the_ID(); ?>" class="post-box" <?php post_class(); ?>>
			<div class="container">
				<div class="image-wrapper clearfix">
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-box-link">
							<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
							<span class="mobile-show-more conceal icon-arrow-down"></span>
						</a>
						<p class="blurb"><?= get_post_meta($post_id, 'wpcf-blurb', true); ?></p>
					<?php endif; ?>
				</div>
				
				<div class="text-wrapper">
						<h2 class="patient-name"><?= get_post_meta($post_id, 'wpcf-name', true); ?></h2>
						<h4 class="patient-subtitle"><?= get_post_meta($post_id, 'wpcf-subtitle', true); ?></h4>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="read-more btn">Read More</a>
				</div>
			</div>
		</div>

	<? endforeach; ?>

</div>