<?php


function load_css(){
	wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false,
	'all');
	wp_enqueue_style('main');
	wp_register_style('archive', get_template_directory_uri() . '/css/archive.css', array(), false,
	'all');
	wp_enqueue_style('archive');

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo&display=swap', false );
}
add_action('wp_enqueue_scripts', 'load_css');


function load_js() {
	wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', array(), false, true );
	
	wp_enqueue_script( 'ScrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js', array(), false, true );

	wp_enqueue_script( 'FontsAwesome', 'https://kit.fontawesome.com/90dd487c39.js', array(), false, true );

	wp_enqueue_script( 'scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js', array(''), false, true );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/JavaScript/script.js', array ( 'jquery' ), true);
}
add_action( 'wp_enqueue_scripts', 'load_js' );


function cost_cards() {

	$args = array(
		'labels' => array(
			'name' => 'Cost Card',
			'singular_name' => 'card'
		),

		'public' => true,
		'has_archive' => false,
		'support' => array('title', 'editor'),

	);

	register_post_type('Cost Cards', $args);

}
add_action('init', 'cost_cards');


add_theme_support('menus');
add_theme_support( 'post-thumbnails' );


add_image_size('img1', 350, 350, true);
add_image_size('img2', 750, 750, true);