<?php /* Template Name: Brands Page */ ?>
<?php get_header(); ?>
<main>
<div class="container brands-page">
	<h4 class="text-center">Filter by Type</h4>
	<div id="types">
		<div class="row">
			<div class="col-md-2 col-xs-4 type">
				<img src="<?php echo get_template_directory_uri(); ?>/images/class-a-icon.png">
				<p>Class A</p>
			</div>
			<div class="col-md-2 col-xs-4 type">
				<img src="<?php echo get_template_directory_uri(); ?>/images/class-b-icon.png">
				<p>Class B</p>
			</div>
			<div class="col-md-2 col-xs-4 type">
				<img src="<?php echo get_template_directory_uri(); ?>/images/class-c-icon.png">
				<p>Class C</p>
			</div>
			<div class="col-md-2 col-xs-4 type">
				<img src="<?php echo get_template_directory_uri(); ?>/images/travel-trailer-icon.png">
				<p>Travel Trailer</p>
			</div>
			<div class="col-md-2 col-xs-4 type">
				<img src="<?php echo get_template_directory_uri(); ?>/images/5thwheel-icon.png">
				<p>5th Wheel</p>
			</div>
			<div class="col-md-2 col-xs-4 type">
				<img src="<?php echo get_template_directory_uri(); ?>/images/tent-trailer-icon.png">
				<p>Tent Trailer</p>
			</div>
		</div>
	</div>
	<h4 class="text-center">Filter by Brand</h4>
	<div id="brands">
		<div class="row">
			<?php $brands = get_terms( 'brands', array('orderby' => 'count','hide_empty' => 0) );
			foreach($brands as $brand) {
				$terms = get_term($brand->term_id, 'brands');
				?>
				<div class="col-xs-6 col-md-3 brand">
					<a href="<?php echo get_term_link($brand); ?>">
						<?php echo '<img src="'.get_field('logo', $terms).'">'; ?>
					</a>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>