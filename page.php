<?php get_header(); ?>

	<div class="page-wrapper generic-page constrain">
		<!-- section -->
		<section class="page-body">

			<h1 class="main-page-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" class="clearfix richtext">

				<?php the_content(); ?>

				<?php // comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php // edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
