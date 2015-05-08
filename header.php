<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js ie lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]><html <?php language_attributes(); ?> class="no-js ie ie7 lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="no-js ie ie8 lt-ie9" lang="en"><![endif]-->
<!--[if IE 9]><html <?php language_attributes(); ?> class="no-js ie ie9" lang="en"><![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?> class="no-js" lang="en"><!--<![endif]-->
<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script><![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
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

		<div id="sidr" style="display:none;">
      <div class="nav">
        <ul>
          <?php mobile_menu(); ?>
        </ul>
      </div>
      <div class="content">
				<div class="search">
					<?php get_template_part('searchform'); ?>
				</div>
				<a href="<?php echo do_shortcode('[contentblock id=give_now_url]') ?>" class="give-now btn">Give Now</a>

				<div class="social">
					<?php $fb = do_shortcode('[contentblock id=facebook_url]'); ?>
					<?php if ( $fb != "" && $fb != "#" ) { ?><a href="<?php echo
	 $fb; ?>" target="_blank" class="icon-circle-facebook white"></a><?php } ?>
	
					<?php $fb = do_shortcode('[contentblock id=twitter_url]'); ?>
					<?php if ( $fb != "" && $fb != "#" ) { ?><a href="<?php echo
	 $fb; ?>" target="_blank" class="icon-circle-twitter white"></a><?php } ?>

					<?php $fb = do_shortcode('[contentblock id=youtube_url]'); ?>
					<?php if ( $fb != "" && $fb != "#" ) { ?><a href="<?php echo
	 $fb; ?>" target="_blank" class="icon-circle-youtube white"></a><?php } ?>

					<?php $fb = do_shortcode('[contentblock id=linkedin_url]'); ?>
					<?php if ( $fb != "" && $fb != "#" ) { ?><a href="<?php echo
	 $fb; ?>" target="_blank" class="icon-circle-linkedin white"></a><?php } ?>

					<?php $fb = do_shortcode('[contentblock id=google_plus_url]'); ?>
					<?php if ( $fb != "" && $fb != "#" ) { ?><a href="<?php echo
	 $fb; ?>" target="_blank" class="icon-circle-google-plus white"></a><?php } ?>

					<?php $fb = do_shortcode('[contentblock id=instagram_url]'); ?>
					<?php if ( $fb != "" && $fb != "#" ) { ?><a href="<?php echo
	 $fb; ?>" target="_blank" class="icon-circle-instagram white"></a><?php } ?>
				</div>

      </div>
    </div>
		
		<div class="wrapper">

			<header class="main clearfix">

					<div class="title-bar">
						<div class="constrain">
							<a class="icon-menu" href="#" id="show-menu"></a>
							<a class="hidden" href="#" id="fake-show-menu"></a>
							<a href="http://www.sacred-heart.org" title="Sacred Heart Health System"><img src="<?php echo get_template_directory_uri(); ?>/img/short_logo.png" alt="Sacred Heart Health Systems" id="short-logo" /></a>
							<nav class="links reveal">
								<ul>
									<li><a href="#" class="open-hospital" id="pensacola">SHH Pensacola</a></li>
									<li><a href="#" class="open-hospital" id="emerald">SHH Emerald Coast</a></li>
									<li><a href="#" class="open-hospital" id="gulf">SHH Gulf</a></li>
								</ul>
							</nav>
						</div>
					</div>

					<div class="hospital-dropdown" id="pensacola">
						<div class="constrain">
							<div class="top">
								<a href="http://www.sacred-heart.org/SacredHeartHospitalPensacola" title="SHHP">Open SHHP Site</a>
								<a href="#" class="close-hospital-dropdown icon-close"></a>
							</div>
							<div class="bottom clearfix">
								<ul>
									<li><a href="http://www.sacred-heart.org/CancerCenter">Cancer</a></li>
									<li><a href="http://www.sacred-heart.org/ChildrensHospital/">Children's Hospital</a></li>
									<li><a href="http://www.sacred-heart.org/heart/">Heart &amp; Vascular</a></li>
									<li><a href="http://www.sacred-heart.org/orthopedics/">Orthopedics</a></li>
									<li><a href="http://www.sacred-heart.org/neuro/">Neuroscience</a></li>
									<li><a href="http://www.sacredheartsurgicalweightloss.com/" target="_blank">Weight Loss</a></li>
									<li><a href="http://www.sacred-heart.org/SacredHeartHospitalPensacola/Services/"><em>More Services &gt;&gt;</em></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="hospital-dropdown" id="emerald">
						<div class="constrain">
							<div class="top">
								<a href="http://www.sacredheartemerald.org/" title="SHHEC">Open SHHEC Site</a>
								<a href="#" class="close-hospital-dropdown icon-close"></a>
							</div>
							<div class="bottom clearfix">
								<ul>
									<li><a href="http://sacredheartemerald.org/familybirthplace/">Family Birth Place</a></li>
									<li><a href="http://www.sacredheartemerald.org/services/orthopedic.asp">Orthopedics</a></li>
									<li><a href="http://sacredheartemerald.org/hv/">Heart &amp; Vascular</a></li>
									<li><a href="http://sacredheartemerald.org/womens/">Women's Diagnostic Center</a></li>
									<li><a href="http://www.sacredheartemerald.org/services/cancer.asp">Cancer Services</a></li>
									<li><a href="http://www.sacredheartemerald.org/main.asp"><em>More Services &gt;&gt;</em></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="hospital-dropdown" id="gulf">
						<div class="constrain">
							<div class="top">
								<a href="http://www.sacred-heart.org/Gulf" title="SHHG">Open SHHG Site</a>
								<a href="#" class="close-hospital-dropdown icon-close"></a>
							</div>
							<div class="bottom clearfix">
								<ul>
									<li><a href="http://www.sacred-heart.org/gulf/page/?ID=639">Outpatient Infusion Services</a></li>
									<li><a href="http://www.sacred-heart.org/gulf/page/?ID=599">Physical Rehabilitation</a></li>
									<li><a href="http://www.sacred-heart.org/gulf/page/?ID=600"><em>More Services &gt;&gt;</em></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="dropdown-nav">
						<div class="constrain">
							<div class="menu-wrapper">
								<?php top_menu(); ?>
							</div>
							<div class="search-wrapper">
								<form class="site-search" action="http://www.sacred-heart.org/sitesearch.asp">
									<input type="hidden" name="cx" value="003753645996749388088:riaf2vdj9us">
									<input type="hidden" name="cof" value="FORID:9">
									<input type="text" name="q" placeholder="Enter Keywords" />
									<p class="ie-show search-text">search</p>
									<input type="submit" name="sa" value="Search Sacred Heart" />
								</form>
							</div>
						</div>
						<div class="close-wrapper">
							<div class="close-menu">
								<a href="#" id="close-top-nav"><span class="arrows right">&#9654; &#9654;</span>CLOSE MENU<span class="arrows left">&#9664; &#9664;</span></a>
							</div>
						</div>
					</div>

					<div class="main-header clearfix">
						<div class="constrain">
							<a href="/" class="logo-link" title="Home">
								<img src="/wp-content/uploads/2015/04/shf.png" alt="Sacred Heart Health Systems" id="main-logo" />
							</a>
							<div class="content">
								<div class="top">
									<span class="callout reveal">Make a Difference. Support Sacred Heart.</span>
									<a href="<?php echo do_shortcode('[contentblock id=give_now_url]') ?>" target="_blank" class="give-now btn">Give Now</a>
								</div>
								<div class="bottom">
									<div class="forms-container reveal">
										<a href="#" id="show-forms">Download Event Forms</a>
										<div class="downloadable-forms">
											<?php forms_menu(); ?>
										</div>
									</div>
							<!-- 		<div class="social reveal">
										<a href="/contact-us/newsletter" title="Newsletter" class="icon-circle-mail"></a>
									</div> -->
									<div class="search reveal">
										<?php get_template_part('searchform'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<nav class="main constrain reveal">
						<div class="menu">
							<?php header_menu(); ?>
						</div>
					</nav>


			</header>



