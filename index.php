<?php get_header(); ?>

	<div class="page-wrapper constrain">
		<div class="page-body">
			<h1 class="main-page-title">Recent News</h1>
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
	</div>

<?php get_footer(); ?>
