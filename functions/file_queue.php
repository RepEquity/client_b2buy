<?php

// Register/Enqueue css and js
add_action( 'wp_print_scripts', 'engueue_b2buy_scripts' );
add_action( 'wp_print_styles', 'engueue_b2buy_styles' );


/**
 * Theme Scripts/Styles
 */

    wp_enqueue_style('flexslider', get_stylesheet_directory_uri().'/styles/flexslider.css');


function engueue_b2buy_styles() {	
	wp_register_style( 'main', get_template_directory_uri().'/styles/main.css' );
	wp_register_style( 'owl_css', get_template_directory_uri().'/js/vendor/owl.carousel/owl-carousel/owl.carousel.css' );
	wp_register_style( 'owl_theme', get_template_directory_uri().'/js/vendor/owl.carousel/owl-carousel/owl.theme.css' );
	wp_register_style( 'icomoon', get_template_directory_uri().'/styles/icomoon.css' );
	wp_register_style('flexslider', get_stylesheet_directory_uri().'/styles/flexslider.css');

	wp_enqueue_style( 'icomoon' );
	wp_enqueue_style( 'owl_css' );
	wp_enqueue_style( 'owl_theme' );
	wp_enqueue_style( 'main' );
	wp_enqueue_style("wp-jquery-ui-dialog");
	wp_enqueue_style('flexslider');
}

function engueue_b2buy_scripts() {	
	wp_register_script('first_load', get_template_directory_uri().'/js/firstLoad.min.js' );
	wp_register_script('respond', get_template_directory_uri().'/js/vendor/respond.js' );
	wp_register_script('touch_swipe', get_template_directory_uri().'/js/vendor/jquery.touchSwipe.min.js' );
	wp_register_script('app_js', get_template_directory_uri().'/js/app.js', array('jquery'), FALSE, TRUE );
	wp_register_script( 'google_maps', 'http://maps.googleapis.com/maps/api/js?sensor=false');
	wp_register_script('flexslider', get_stylesheet_directory_uri().'/js/jquery.flexslider-min.js', array('jquery'));
	wp_register_script('marquee', get_stylesheet_directory_uri().'/js/jquery.marquee.min.js', array('jquery'));
	wp_register_script('flexslider-init', get_stylesheet_directory_uri().'/js/flexslider-init.js', array('jquery', 'flexslider'));
	
	
	wp_enqueue_script( 'app_js');
	wp_enqueue_script( 'respond');
	wp_enqueue_script( 'first_load' );
	wp_enqueue_script( 'touch_swipe' );
	wp_enqueue_script( 'jquery-ui-core', false, array('jquery') );
	wp_enqueue_script( 'flexslider');
	wp_enqueue_script( 'flexslider-init');
	wp_enqueue_script( 'jquery-ui-dialog' );
	wp_enqueue_script( 'marquee' );

	
}