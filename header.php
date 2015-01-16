<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" rel="stylesheet" />

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-152x152.png" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<div class="body-overlay"></div>
		
		<div class="wrapper">


			<header class="main">

					<div class="title-bar">
						<div class="constrain">
							<a class="icon-menu" href="#" id="show-menu"></a>
							<img src="<?php echo get_template_directory_uri(); ?>/img/short_logo.png" alt="Sacred Heart Health Systems" id="short-logo" />
							<nav class="links reveal">
								<ul>
									<li><a href="#">SHH Pensacola</a></li>
									<li><a href="#">SHH Emerald Coast</a></li>
									<li><a href="#">SHH Gulf</a></li>
								</ul>
							</nav>
						</div>
					</div>

					<div class="main-header">
						<div class="constrain">
							<a href="/" class="logo-link" title="Home">
								<img src="<?php echo get_template_directory_uri(); ?>/img/main_logo.png" alt="Sacred Heart Health Systems" id="main-logo" />
							</a>
							<div class="content">
								<div class="top">
									<span class="callout reveal">Make a Difference. Support Sacred Heart.</span>
									<a href="<?php echo do_shortcode('[contentblock id=give_now_url]') ?>" target="_blank" class="give-now btn">Give Now</a>
								</div>
								<div class="bottom">
									<div class="social reveal">
										<a href="<?php echo do_shortcode('[contentblock id=facebook_url]') ?>" class="icon-circle-facebook" target="_blank"></a>
										<a href="<?php echo do_shortcode('[contentblock id=twitter_url]') ?>" class="icon-circle-twitter" target="_blank"></a>
									</div>
									<div class="search reveal">
										<?php get_template_part('searchform'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<nav class="main constrain reveal">
						<div class="menu">
							<? html5blank_nav(); ?>
						</div>
					</nav>


			</header>

