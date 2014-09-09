<?php
// disable admin bar
add_filter('show_admin_bar', '__return_false');


function register_b2buy_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
    )
  );
}
add_action( 'init', 'register_b2buy_menus' );
add_theme_support( 'post-thumbnails' );

add_image_size( 'TeamBioImage', '768', '768', true );
add_image_size( 'Square', '150', '150', true );

function custom_excerpt_length( $length ) {
	return 25;
}

function custom_excerpt_more( $more ) {
	return '... <a href="'.get_permalink().'">[Read More]</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_filter("gform_confirmation_anchor_2", create_function("","return false;"));

function morehead_widgets_init() {

	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="sidebar">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'morehead_widgets_init' );


add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'my_mce_buttons_2');

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Featured Text',  
			'block' => 'p',  
			'classes' => 'featured',
			'wrapper' => false,
			
		)
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

function my_theme_add_editor_styles() {
    add_editor_style( 'styles/main.css' );
}
add_action( 'after_setup_theme', 'my_theme_add_editor_styles' );
?>