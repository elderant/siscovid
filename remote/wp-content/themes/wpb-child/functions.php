<?php

function wpb_child_enqueue_styles() {
	//styles
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('wpb-child-animate', get_stylesheet_directory_uri() . '/inc/assets/css/animate.min.css', array(), false );
	
	//Scripts
	wp_enqueue_script('wpb-child-main', get_stylesheet_directory_uri() . '/inc/assets/js/script.js', array(), '', true );
	wp_enqueue_script('wpb-child-slick', get_stylesheet_directory_uri() . '/inc/assets/js/slick.min.js', array('jquery'), false, true );
	// wp_enqueue_script('wpb-child-home-hovers', get_stylesheet_directory_uri() . '/inc/assets/js/home/hovers.js', array('jquery'), false, true );

	if(is_page(2)) {
		// wp_enqueue_script('wpb-child-vega-d3', 'https://cdn.jsdelivr.net/npm/d3@5', array(), false, true );
		// wp_enqueue_script('wpb-child-vega-client', 'https://cdn.jsdelivr.net/npm/d3@5', array(), false, true );
		// wp_enqueue_script('wpb-child-vega-core', 'https://cdn.jsdelivr.net/npm/vega@5/build/vega-core.min.js', array(), false, true );
	}
	if(is_page(54)) {
		wp_enqueue_script('wpb-child-polyfill', 'https://polyfill.io/v3/polyfill.min.js?features=es6', array(), false, true );
		wp_enqueue_script('wpb-child-mathjax', 'https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js', array(), false, true );
	}
} 
add_action( 'wp_enqueue_scripts', 'wpb_child_enqueue_styles', 10 );

add_action( 'wp_enqueue_scripts', 'wpb_child_enqueue_mobile_styles', 99 );
function wpb_child_enqueue_mobile_styles() {
	wp_enqueue_style('wpb-child-home-mobile', get_stylesheet_directory_uri() . '/inc/assets/css/mobile.css', array(), false );
}

add_action( 'wp_enqueue_scripts', 'wpb_child_enqueue_bootstrap_extended_styles', 99 );
function wpb_child_enqueue_bootstrap_extended_styles() {
	wp_enqueue_style('wpb-child-bootstrap-ext', get_stylesheet_directory_uri() . '/inc/assets/css/bootstrap.ext.css', array(), false );
}

add_action('wp_head', 'wpb_child_add_goolge_site_verification');
function wpb_child_add_goolge_site_verification() {
	if(is_home()) {
		?>
			<meta name="google-site-verification" content="iwxvCGSMinApzlPI41DoIJUV3skEml1I8THxu_0PB3o" />
		<?php 
	}
}

add_action('wp_head', 'wpb_child_add_goolge_tracking',1);
function wpb_child_add_goolge_tracking() {
	$html = "<!-- Global site tag (gtag.js) - Google Analytics -->" .
		"<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-168497625-1\"></script>" .
		"<script>" . 
			"window.dataLayer = window.dataLayer || [];" . 
			"function gtag(){dataLayer.push(arguments);}" .
  		"gtag('js', new Date());" .
			"gtag('config', 'UA-168497625-1');" .
			"gtag('config', 'UA-168673551-1');" . 
		"</script>";
	
	echo $html;
}

add_filter('script_loader_tag', 'wp_child_add_script_attributes', 10, 2);
function wp_child_add_script_attributes($tag, $handle) {
	if ( 'wpb-child-mathjax' !== $handle )
		return $tag;
	return str_replace( ' src', 'id="MathJax-script" async="async" src', $tag );
}
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

function wpb_child_register_footer_menu() {
  register_nav_menu('footer-menu', __( 'Footer menu', 'wpbchild' ));
}
add_action( 'init', 'wpb_child_register_footer_menu' );
