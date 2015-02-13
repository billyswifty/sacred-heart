<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>

	<?php 
		global $post;
		setup_postdata( $post );
		$post_id = $post->ID;
	?>

	<div class="page-wrapper generic-page constrain">
		<!-- section -->
		<section class="page-body">

			<h1 class="main-page-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" class="clearfix richtext">

				
				<?php echo do_shortcode('[google_maps id="137"]') ?>
				<div class="contact-text-wrapper richtext">
					<?php echo get_post_meta($post_id, 'wpcf-main-body-text', true); ?>
					
					<br />

			<? $fb = do_shortcode('[contentblock id=facebook_url]'); ?>
			<? if ( $fb != "" && $fb != "#" ) { ?><a href="<?= $fb ?>" target="_blank" class="icon-circle-facebook link">Follow Us on Facebook</a><? } ?>
			<br />
			<br />
			<a href="/privacy-policy" style="font-size:13px;">Privacy Policy</a>

				</div>
				
				<?php echo do_shortcode('[contact_form]') ?>
				<div class="contact-small-text">

					<?php echo get_post_meta($post_id, 'wpcf-small-text', true); ?>
				</div>

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
