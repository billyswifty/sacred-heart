
			<footer class="main clearfix">
				<div class="constrain">
					<div class="links">
						<a href="<?php echo do_shortcode('[contentblock id=give_now_url]') ?>" target="_blank" class="give-now btn">Give Now</a>
						<div class="contact">
							<?php $fb = do_shortcode('[contentblock id=facebook_url]'); ?>
							<?php if ( $fb != "" && $fb != "#" ) { ?><a href="<?php echo
	 $fb; ?>" target="_blank" class="icon-circle-facebook colored"></a><?php } ?>
			
							<?php $fb = do_shortcode('[contentblock id=twitter_url]'); ?>
							<?php if ( $fb != "" && $fb != "#" ) { ?><a href="<?php echo
	 $fb; ?>" target="_blank" class="icon-circle-twitter colored"></a><?php } ?>

							<?php $fb = do_shortcode('[contentblock id=youtube_url]'); ?>
							<?php if ( $fb != "" && $fb != "#" ) { ?><a href="<?php echo
	 $fb; ?>" target="_blank" class="icon-circle-youtube colored"></a><?php } ?>

							<?php $fb = do_shortcode('[contentblock id=linkedin_url]'); ?>
							<?php if ( $fb != "" && $fb != "#" ) { ?><a href="<?php echo
	 $fb; ?>" target="_blank" class="icon-circle-linkedin colored"></a><?php } ?>

							<?php $fb = do_shortcode('[contentblock id=google_plus_url]'); ?>
							<?php if ( $fb != "" && $fb != "#" ) { ?><a href="<?php echo
	 $fb; ?>" target="_blank" class="icon-circle-google-plus colored"></a><?php } ?>

							<?php $fb = do_shortcode('[contentblock id=instagram_url]'); ?>
							<?php if ( $fb != "" && $fb != "#" ) { ?><a href="<?php echo
	 $fb; ?>" target="_blank" class="icon-circle-instagram colored"></a><?php } ?>
						</div>
						<div class="copyright">
							<p>Copyright &copy; <?php echo date("Y"); ?> <a href="http://www.sacred-heart.org/" target="_blank">Sacred Heart Health System</a><br />
							5151 N. Ninth Avenue - Pensacola, FL 32504</p>
						</div>
					</div>
					<div class="navigation">
						<div class="grid-row">
							<div class="unit1of2">
								<?php footer_1_menu(); ?>
							</div>
							<div class="unit1of2">
								<?php footer_2_menu(); ?>
							</div>
						</div>
					</div>
				</div>
			</footer>


		</div>


		<?php wp_footer(); ?>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
