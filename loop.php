<!-- <div class="page-wrapper constrain">
	<div class="page-body"> -->
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="loop-wrapper">
				
				<article class="loop-post" id="post-<?php the_ID(); ?>">

					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<!--		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(120,120)); ?>
						</a> -->
					<?php endif; ?>

					<h5 class="post-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h5>

					<!-- <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span> -->

					<div class="post-excerpt">
						<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
					</div>
					<?php // edit_post_link(); ?>

				</article>

			</div>

		<?php endwhile; ?>

		<?php else: ?>

			<article class="loop-no-results">
				<p class="sorry"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></p>
			</article>

		<?php endif; ?>
<!-- 	</div>
</div>


 -->