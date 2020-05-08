<?php
add_action( 'wp_enqueue_scripts', 'wpb_child_enqueue_styles' );
function wpb_child_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script('wpb-child-main', get_stylesheet_directory_uri() . '/inc/assets/js/script.js', array(), '', true );

	wp_enqueue_style('wpb-child-home-animate', get_stylesheet_directory_uri() . '/inc/assets/css/animate.css', array(), false );
	// wp_enqueue_style('wpb-child-home-hover', get_stylesheet_directory_uri() . '/inc/assets/css/hover.css', array(), false );
	// wp_enqueue_style('wpb-child-home-slick', get_stylesheet_directory_uri() . '/inc/assets/css/slick.css', array(), false );
} 

add_action( 'wp_enqueue_scripts', 'wpb_child_enqueue_mobile_styles', 99 );
function wpb_child_enqueue_mobile_styles() {
	// wp_enqueue_style('wpb-child-home-mobile', get_stylesheet_directory_uri() . '/inc/assets/css/mobile.css', array(), false );
}

// include custom jQuery
function wpb_child_include_custom_jquery() {
	// wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'wpb_child_include_custom_jquery');


/******************** Shared ********************/
//Page Slug Body Class
function wpb_child_add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) && get_post_type( get_the_ID() ) == 'page' ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'wpb_child_add_slug_body_class' );

// function laaldea_register_secondary_menu() {
//   register_nav_menu('secondary-menu', __( 'Secondary menu', 'laaldea' ));
// }
// add_action( 'init', 'laaldea_register_secondary_menu' );