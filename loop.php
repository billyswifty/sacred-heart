

		<div class="news-list-block">


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="loop-wrapper">
				


				<div class="post-unit clearfix">
					<?php if ( has_post_thumbnail()) {  ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<div class="image-holder" style="background-image:url('<?php echo $image[0] ?>');"></div>

					<?php } else { ?>
						<div class="image-holder placeholder" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg');"></div>
					<?php } ?>
          <div class="post-text">
					  <h4 class="post-title"><?php the_title(); ?></h4>
					  <h6 class="post-date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></h6>
	
	            <div class="post-excerpt">
	              <?php html5wp_excerpt('html5wp_index'); ?>
	            </div>

<!--             <a href="<?php the_permalink(); ?>" class="btn">Read More</a> -->
          </div>
				</div>



			</div>


		<?php endwhile; ?>

		</div>

		<?php else: ?>

			<article class="loop-no-results">
				<p class="sorry"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></p>
			</article>

		<?php endif; ?>
		
			