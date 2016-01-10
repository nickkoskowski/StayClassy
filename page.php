<?php get_header(); ?>
<main>
	<div class="container">
		<div class="row" id="page">
			<div class="col-md-8">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
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