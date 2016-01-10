<?php /* Template Name: Rates Calculator Page */ 
get_header(); ?>
<main>
	<div class="container">
		<div class="row" id="page">
			<div class="col-md-8">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="row logos">
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/images/sd-airport.png">
					</div>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/images/lax-airport.png">
					</div>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/images/mc-airport.png">
					</div>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/images/jw-airport.png">
					</div>
				</div>
				<form id="rate-calculator" onsubmit="event.preventDefault();">
					<h4>Start typing the ZIP Code or area where we will pick you up<br/> (i.e. 92101 or Oceanside) to get a quote.</h4>
					<input id="tags" placehoder="Type your starting location here..." class="ui-autocomplete-input" autocomplete="off">
					<input type="submit" value="Find Rates">
					<div class="row text-center rates">
						<div class="col-md-2 col-md-offset-1">
							<div class="location-label">Los Angeles Airport (LAX)</div>
							<div id="LAX"><span>$ &nbsp;</span></div>
						</div>
						<div class="col-md-2">
							<div class="location-label">San Diego Airport (SAN)</div>
							<div id="SDA"><span>$ &nbsp;</span></div>
						</div>
						<div class="col-md-2">
							<div class="location-label">San Diego Downtown (SDD)</div>
							<div id="SDD"><span>$ &nbsp;</span></div>
						</div>
						<div class="col-md-2">
							<div class="location-label">John Wayne Airport (SNA)</div>
							<div id="JWA"><span>$ &nbsp;</span></div>
						</div>
						<div class="col-md-2">
							<div class="location-label">Long Beach Airport (LGB)</div>
							<div id="LBA"><span>$ &nbsp;</span></div>
						</div>
					</div>
				</form>
				<?php get_template_part('modules/city', 'db'); ?>
			<?php endwhile; endif; ?>
		</div>
		<div class="col-md-4" id="sidebar">
			<div id="actions" class="row">
				<div class="col-md-12">
					<div class="rnd-box sedan">
						<h2>Book Now</h2>
					</div>
				</div>
				<div class="col-md-12">
					<div class="rnd-box airport">
						<img src="">
						<h2>Airport Services</h2>
					</div>
				</div>
				<div class="col-md-12">
					<div class="rnd-box festival">
						<img src="">
						<h2>Music Festivals</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</main>
<?php get_footer(); ?>