<?php
/*
Template Name: Events
*/
?>

<?php get_header(); ?>

	<?php 
		global $post;
		setup_postdata( $post );
		$post_id = $post->ID;
	?>

	<div class="page-wrapper events-page constrain">
		<!-- section -->
		<section class="page-body">

			
			<?php layerslider(3) ?>

			<div class="text-wrapper">
			<h1 class="main-page-title"><?php echo get_post_meta($post_id, 'wpcf-events-page-title', true); ?></h1>

			<?php echo get_post_meta($post_id, 'wpcf-events-page-text', true); ?>
			
			<div class="loop-wrapper">
				
				<?
		  		global $post;
		  		$myposts = get_posts(array(
					  'numberposts' => 20,
					  'post_type' => 'event',
					  'orderby'  => 'meta_value',
					  'meta_key' => '_event_start_date',
					  'order'  => 'ASC'
					));

		  		$count = 0; 

		  		foreach($myposts as $post) :
		    		setup_postdata( $post );
						$post_id = $post->ID;
						$count = $count + 1;
						$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				?>

				<div class="loop-post event clearfix">
					<div class="cal-icon">
						<? 	$monthNum = date_parse(get_post_meta($post_id, '_event_start_date', true))['month'];
						 		$dateObj   = DateTime::createFromFormat('!m', $monthNum);
								$monthName = $dateObj->format('F'); 
								$dayNum = date_parse(get_post_meta($post_id, '_event_start_date', true))['day'];
						?>
						<div class="month-wrapper">
							<span class="month"><?= $monthName ?></span>
						</div>
						<div class="day-wrapper">
							<span class="day"><?= $dayNum ?></span>
						</div>
					</div>
					<h5 class="post-title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h5>
					<p class="post-excerpt"><? the_excerpt(); ?></p>
				</div>
				
		  	<? endforeach; ?>

			</div>
		</div>

		</section>
		<!-- /section -->
	</div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
