<?php get_header(); ?>

	<div class="page-wrapper constrain">
		<!-- section -->
		<section class="page-body">

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

				<div class="slider-slide">
					<div class="text-wrapper">
						<h4 class="name"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h4>
						<p><? the_excerpt(); ?></p>
					</div>
				</div>

	  	<? endforeach; ?>

		</section>
		<!-- /section -->
	</div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
