<?php get_header(); ?>
<main>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<?php $floorplans = get_field('floorplans'); ?>
		<div id="breadcrumbs">
			<div class="row">
				<div class="col-md-12">
					<p><a href="">Home</a> / <a href="<?php echo get_site_url(); ?>/brands">Brands</a> / <a href=""><?php echo get_brand(get_the_id())->name; ?></a> / <?php the_title(); ?></p>
				</div>
			</div>
		</div>
		<div id="content">
			<div class="row">
				<div class="col-md-6">
					<div class="videoWrapper">
						<iframe id="modelVid" src="<?php echo $floorplans[0]['floorplan_video']; ?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6 text-center">
					<img id="floorplan-image" src="<?php echo $floorplans[0]['floorplan_image']; ?>" data-zoom-image="<?php echo $floorplans[0]['floorplan_image']; ?>">
				<!--<form class="callback-cta">
					<input type="text" placeholder="Your Name">
					<input type="text" placeholder="Phone Number">
					<button>Request a Callback</button>
				</form> -->
				<button data-toggle="modal" data-target="#contactModal">Contact Us for More Info</button>
			</div>
		</div>
		<h2><?php echo get_brand(get_the_id())->name.' '.get_the_title(); ?> Floorplans</h2>
	</div>
	<div id="inventory" class="row">
		<?php 
		foreach ($floorplans as $floorplan) {
			?>
			<div class="col-md-3 model" data-vidlink="<?php echo $floorplan['floorplan_video']; ?>" data-imglink="<?php echo $floorplan['floorplan_image']; ?>">
				<img src="<?php echo $floorplan['floorplan_image']; ?>">
				<h3 class="planName"><?php echo $floorplan['floorplan_name']; ?></h3>
				<div class="row">
					<div class="col-xs-12">
						<button>Inventory</button>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<p class="mobile-only text-center"><strong>Click or Swipe to See Floorplans</strong></p>
		<div class="text-content">
			<div class="row">
				<div class="col-md-8">
					<h3><span>About</span> <?php echo get_brand(get_the_id())->name.' '.get_the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
				<div class="col-md-4">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}  ?>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
</div>
</main>
</div>
<?php get_footer(); ?>