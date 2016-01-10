<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,700,900,400italic,500,500italic' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a href="<?php echo get_site_url(); ?>">
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
					</a>
				</div>
				<div class="col-md-8 text-right">
					<nav>
						<?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
					</nav>
				</div>
			</div>
		</div>
	</header>
