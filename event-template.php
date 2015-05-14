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
				
				<?php
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
				<?php $start_date = get_post_meta($post_id, '_event_start_date', true); ?>
				<?php $end_date = get_post_meta($post_id, '_event_end_date', true); ?>
				<?php $begin_date = new DateTime( $start_date ); ?>
				<?php $finish_date = new DateTime( $end_date ); ?>
				<?php $now = new DateTime(); ?>
				<?php if ($begin_date > $now || ($begin_date < $now && $finish_date > $now)) { ?>
					<div class="loop-post event clearfix">
						<div class="cal-icon">
							<?php
									$this_date = date_parse(get_post_meta($post_id, '_event_start_date', true));
								  $monthNum = $this_date['month'];
							 		$dateObj   = DateTime::createFromFormat('!m', $monthNum);
									$monthName = $dateObj->format('F'); 
									$this_day = date_parse(get_post_meta($post_id, '_event_start_date', true));
									$dayNum = $this_day['day'];
							?>
							<div class="month-wrapper">
								<span class="month"><?php echo $monthName; ?></span>
							</div>
							<div class="day-wrapper">
								<span class="day"><?php echo $dayNum; ?></span>
							</div>
						</div>
						<h5 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<p class="post-excerpt"><?php the_excerpt(); ?></p>
					</div>

				<?php } ?>
				
		  	<?php endforeach; ?>

			</div>
		</div>

		</section>
		<!-- /section -->
	</div>


<?php get_footer(); ?>
