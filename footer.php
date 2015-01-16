
			<footer class="main clearfix">
				<div class="constrain">
					<div class="links">
						<a href="<?php echo do_shortcode('[contentblock id=give_now_url]') ?>" target="_blank" class="give-now btn">Give Now</a>
						<div class="contact">
							<a href="#" class="contact-icon phone"></a>
							<a href="#" class="contact-icon map"></a>
							<a href="#" class="contact-icon mail"></a>
						</div>
					</div>
					<div class="navigation">
						<div class="grid-row">
							<div class="unit1of2">
								<? html5footer_nav(); ?>
							</div>
							<div class="unit1of2">
								<? html5footer2_nav(); ?>
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
