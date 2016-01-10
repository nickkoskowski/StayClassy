	<footer>
		<div id="banner">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h6>About Us</h6>
					<nav>
						<?php wp_nav_menu(array('theme_location' => 'About_Nav',)); ?>
					</nav>
				</div>
				<div class="col-md-3">
					<h6>Our Services</h6>
					<nav>
						<?php wp_nav_menu(array('theme_location' => 'Service_Nav',)); ?>
					</nav>
				</div>
				<div class="col-md-3">
					<h6>Plan Your Trip</h6>
					<nav>
						<?php wp_nav_menu(array('theme_location' => 'Trip_Nav',)); ?>
					</nav>
				</div>
				<div class="col-md-3">
					<div class="social-media">
						<a href="https://www.facebook.com/sdairporttransport">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="https://twitter.com/stayclassytrans">
							<i class="fa fa-twitter"></i>
						</a>
						<a href="https://plus.google.com/+StayClassyTransportationSanDiego">
							<i class="fa fa-google-plus"></i>
						</a>
						<a href="http://www.yelp.com/biz/stay-classy-transportation-san-diego-2">
							<i class="fa fa-yelp"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="copyright">&copy; STAY CLASSY TRANSPORTATION. ALL RIGHTS RESERVED. 8375 CALLE MORELOS SAN DIEGO, CA 92126 | 619-357-0723</p>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>