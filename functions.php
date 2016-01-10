<?php

include 'acf/acf-settings.php';

add_theme_support('post-thumbnails');
add_theme_support('menus');

function resources() {
	//Stylesheets
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap' );
	wp_register_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'style' );
	wp_register_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'slick' );
	wp_register_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'slick-theme' );
	wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'responsive' );

	//Scripts
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array('jquery'));
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'));
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script( 'jquery-ui-autocomplete');
	wp_enqueue_script( 'jquery-ui-menu');
	wp_enqueue_script( 'jquery-ui-widget');
	wp_enqueue_script( 'rates-calc', get_template_directory_uri() . '/js/rates-calc.js', array('jquery', 'jquery-ui-core', 'jquery-ui-autocomplete', 'jquery-ui-menu', 'jquery-ui-widget'));
}
add_action( 'wp_enqueue_scripts', 'resources' );

//Custom Post Types

register_nav_menus( array(
	'Header_Nav' => 'Header Navigation Area',
	'About_Nav' => 'Footer Navigation Area',
	'Service_Nav' => 'Footer Navigation Area',
	'Trip_Nav' => 'Footer Navigation Area',
	) );

?>