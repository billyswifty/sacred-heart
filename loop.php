<?php // if (have_posts()): while (have_posts()) : the_post(); ?>

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

	<!-- div -->
	<div id="post-<?php the_ID(); ?>" class="post-box" <?php post_class(); ?>>
		<div class="container">
		<!-- post thumbnail -->

		<div class="image-wrapper clearfix">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-box-link">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
			<p class="blurb"><?= get_post_meta($post_id, 'wpcf-blurb', true); ?></p>
		<?php endif; ?>

		</div>
		
		<!-- /post thumbnail -->

		<!-- post title -->
<!-- 		<h2> -->
		<!-- 	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> -->
<!-- 		</h2> -->
		<!-- /post title -->
	<div class="text-wrapper">
				<h2 class="patient-name"><?= get_post_meta($post_id, 'wpcf-name', true); ?></h2>
		<h4 class="patient-subtitle"><?= get_post_meta($post_id, 'wpcf-subtitle', true); ?></h4>
	</div>

<!-- 		 -->
	</div>
	</div>
	<!-- /div -->

<? endforeach; ?>

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

	<!-- div -->
	<div id="post-<?php the_ID(); ?>" class="post-box" <?php post_class(); ?>>
		<div class="container">
<div class="image-wrapper clearfix">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-box-link">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
			<p class="blurb"><?= get_post_meta($post_id, 'wpcf-blurb', true); ?></p>
		<?php endif; ?>

		</div>

		<!-- post title -->
<!-- 		<h2> -->
		<!-- 	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> -->
<!-- 		</h2> -->
		<!-- /post title -->
<div class="text-wrapper">
			<h2 class="patient-name"><?= get_post_meta($post_id, 'wpcf-name', true); ?></h2>
		<h4 class="patient-subtitle"><?= get_post_meta($post_id, 'wpcf-subtitle', true); ?></h4>
</div>

<!-- 		<p class="blurb"><?= get_post_meta($post_id, 'wpcf-blurb', true); ?></p> -->
	</div>
	</div>
	<!-- /div -->

<? endforeach; ?>

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

	<!-- div -->
	<div id="post-<?php the_ID(); ?>" class="post-box" <?php post_class(); ?>>
		<div class="container">
<div class="image-wrapper clearfix">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-box-link">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
			<p class="blurb"><?= get_post_meta($post_id, 'wpcf-blurb', true); ?></p>
		<?php endif; ?>

		</div>

		<!-- post title -->
<!-- 		<h2> -->
		<!-- 	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> -->
<!-- 		</h2> -->
		<!-- /post title -->
	<div class="text-wrapper">
				<h2 class="patient-name"><?= get_post_meta($post_id, 'wpcf-name', true); ?></h2>
		<h4 class="patient-subtitle"><?= get_post_meta($post_id, 'wpcf-subtitle', true); ?></h4>
	</div>

<!-- 		<p class="blurb"><?= get_post_meta($post_id, 'wpcf-blurb', true); ?></p> -->
	</div>
	</div>
	<!-- /div -->

<? endforeach; ?>

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

	<!-- div -->
	<div id="post-<?php the_ID(); ?>" class="post-box" <?php post_class(); ?>>
		<div class="container">
<div class="image-wrapper clearfix">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-box-link">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
			<p class="blurb"><?= get_post_meta($post_id, 'wpcf-blurb', true); ?></p>
		<?php endif; ?>

		</div>

		<!-- post title -->
<!-- 		<h2> -->
		<!-- 	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> -->
<!-- 		</h2> -->
		<!-- /post title -->
	<div class="text-wrapper">
				<h2 class="patient-name"><?= get_post_meta($post_id, 'wpcf-name', true); ?></h2>
		<h4 class="patient-subtitle"><?= get_post_meta($post_id, 'wpcf-subtitle', true); ?></h4>
	</div>

<!-- 		<p class="blurb"><?= get_post_meta($post_id, 'wpcf-blurb', true); ?></p> -->
	</div>
	</div>
	<!-- /div -->

<? endforeach; ?>

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

	<!-- div -->
	<div id="post-<?php the_ID(); ?>" class="post-box" <?php post_class(); ?>>
		<div class="container">
		<!-- post thumbnail -->
<div class="image-wrapper clearfix">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-box-link">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
			<p class="blurb"><?= get_post_meta($post_id, 'wpcf-blurb', true); ?></p>
		<?php endif; ?>

		</div>

		<!-- post title -->
<!-- 		<h2> -->
		<!-- 	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> -->
<!-- 		</h2> -->
		<!-- /post title -->
	<div class="text-wrapper">
				<h2 class="patient-name"><?= get_post_meta($post_id, 'wpcf-name', true); ?></h2>
		<h4 class="patient-subtitle"><?= get_post_meta($post_id, 'wpcf-subtitle', true); ?></h4>
	</div>

<!-- 		<p class="blurb"><?= get_post_meta($post_id, 'wpcf-blurb', true); ?></p> -->
	</div>
	</div>
	<!-- /div -->

<? endforeach; ?>

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

	<!-- div -->
	<div id="post-<?php the_ID(); ?>" class="post-box" <?php post_class(); ?>>
		<div class="container">
		<!-- post thumbnail -->
<div class="image-wrapper clearfix">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-box-link">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
			<p class="blurb"><?= get_post_meta($post_id, 'wpcf-blurb', true); ?></p>
		<?php endif; ?>

		</div>
		<!-- /post thumbnail -->

		<!-- post title -->
<!-- 		<h2> -->
		<!-- 	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> -->
<!-- 		</h2> -->
		<!-- /post title -->
	<div class="text-wrapper">
				<h2 class="patient-name"><?= get_post_meta($post_id, 'wpcf-name', true); ?></h2>
		<h4 class="patient-subtitle"><?= get_post_meta($post_id, 'wpcf-subtitle', true); ?></h4>
	</div>

<!-- 		<p class="blurb"><?= get_post_meta($post_id, 'wpcf-blurb', true); ?></p> -->
	</div>
	</div>
	<!-- /div -->

<? endforeach; ?>

</div>

<script>
	// $(document).ready(function() {
	// 	var container = document.querySelector('.post-grid-wraper');
	// 	var msnry = new Masonry( container, {
	// 	  // options
	// 	  columnWidth: 200,
	// 	  itemSelector: '.post-box'
	// 	});
	// });
</script>