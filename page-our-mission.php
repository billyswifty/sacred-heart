<?php get_header(); ?>

	<div class="page-wrapper our-mission constrain">

		<section class="page-body">

			<div class="top-banner"></div>

			<div class="about-text">
				<h4 class="section-title">Sacred Heart's Story and Mission</h4>
				<p>For 100 years, The Sacred Heart Health System mission of high-quality compassionate healthcare has impacted generations of families in Northwest Florida and Southern Alabama. It all began with a small group of caring nuns, called The Sisters of Charity, who put their faith and concern for others into action each day. From humble begins they began Sacred Heart Hospital to care for those in need and turn no one away.</p>
				<p>Today, tens of thousands of our neighbors across the region depend on the Sacred Heart Health System for their care. Sacred Heart Foundation donors, much like the sisters of Charity, put their care and concern for those in need into action each day— supporting the tiniest newborns to the most elderly seniors and making the difference for every patient who walks through our doors.</p>
			</div>

			<div class="grid-row vision">
				<div class="unit1of2 image"></div>
				<div class="unit1of2 legacy">
					<div class="contain">
						<div class="table">
							<div class="table-cell">
								<h4 class="section-title">Building a Legacy: Our Vision for the Future</h4>
								<p>We provide a vast array of primary care and tertiary services in multiple inpatient and outpatient settings. These include 24-hour emergency and Level II trauma care; the region's leading Stroke Center; the Heart and Vascular Institute; the Cancer Center, an affiliate of MD Anderson; advanced Obstetric care and Pediatric specialties, Joint Replacement Surgery and other centers of excellence served with distinction by more than 700 primary care and specialty physicians.</p>
								<a href="<?php echo do_shortcode('[contentblock id=give_now_url]') ?>" class="give-now btn">Give Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="grid-row needs">
				<div class="unit1of4 greatest">
					<div class="table">
						<div class="table-cell">
							<h2 class="section-title">Our Greatest Needs</h2>
						</div>
					</div>
				</div>
				<a class="unit1of4 need" href="#" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/building.jpg);">
					<div class="overlay"></div>
					<div class="text-wrapper">
						<h4 class="name">The Children's Hospital of Sacred Heart</h4>
					</div>
					<div class="need-text" style="display:none;">
						<h4 class="section-title">The Children’s Hospital at Sacred Heart</h4>
						<ul>
							<li>Create a state-of-the-art facility that will serve as the region’s hub for pediatric and maternal-fetal healthcare services.</li>
							<li>Create an environment that provides the appropriate space and conditions for the more than 800 babies who are admitted each year</li>
							<li>Create private rooms for each patient and his or her family with the space and furnishings that will allow parents to stay with their child 24/7</li>
							<li>Every corner of the 45 year old Children’s Hospital will undergo a greatly needed facelift: including a private Neonatal Intensive Care Unit, Renovated Labor and Delivery Unit, Modernized Patient Rooms, Main entrance and lobby</li>
						</ul>
					</div>
				</a>
				<a class="unit1of4 need" href="#" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/building.jpg);">
					<div class="overlay"></div>
					<div class="text-wrapper">
						<h4 class="name">The Children's Hospital of Sacred Heart</h4>
					</div>
					<div class="need-text" style="display:none;">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste provident, nam ex sapiente voluptatum optio id odit voluptates quos porro aliquid rem consequuntur! Ratione laudantium at nisi officia corrupti! Eos.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus non tempore autem debitis, error eum incidunt praesentium perspiciatis! Quas magni rerum quae reprehenderit labore inventore sunt obcaecati nesciunt facilis vel.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nostrum itaque provident beatae labore, at veniam, asperiores, consequuntur quos fuga iusto libero voluptate illum ab corporis dolores quasi! Eaque, consectetur?</p>
					</div>
				</a>
				<a class="unit1of4 need" href="#" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/building.jpg);">
					<div class="overlay"></div>
					<div class="text-wrapper">
						<h4 class="name">The Children's Hospital of Sacred Heart</h4>
					</div>
					<div class="need-text" style="display:none;">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste provident, nam ex sapiente voluptatum optio id odit voluptates quos porro aliquid rem consequuntur! Ratione laudantium at nisi officia corrupti! Eos.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus non tempore autem debitis, error eum incidunt praesentium perspiciatis! Quas magni rerum quae reprehenderit labore inventore sunt obcaecati nesciunt facilis vel.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nostrum itaque provident beatae labore, at veniam, asperiores, consequuntur quos fuga iusto libero voluptate illum ab corporis dolores quasi! Eaque, consectetur?</p>
					</div>
				</a>
			</div>

			<div class="detail-text">
				<h4 class="section-title">The Children’s Hospital at Sacred Heart</h4>
				<ul>
					<li>Create a state-of-the-art facility that will serve as the region’s hub for pediatric and maternal-fetal healthcare services.</li>
					<li>Create an environment that provides the appropriate space and conditions for the more than 800 babies who are admitted each year</li>
					<li>Create private rooms for each patient and his or her family with the space and furnishings that will allow parents to stay with their child 24/7</li>
					<li>Every corner of the 45 year old Children’s Hospital will undergo a greatly needed facelift: including a private Neonatal Intensive Care Unit, Renovated Labor and Delivery Unit, Modernized Patient Rooms, Main entrance and lobby</li>
				</ul>
			</div>

		</section>

	</div>

<?php get_footer(); ?>


<script>

	(function ($, root, undefined) {
	
		$(function () {
			
			'use strict';

			$(".need").click(function(event) {
				event.preventDefault();
				$(".detail-text").html();
				$(".detail-text").html( $(this).find(".need-text").html() );
			});


		});
		
	})(jQuery, this);

</script>
