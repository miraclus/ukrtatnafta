<?php 


function load_stylesheets(){
// enqueue parent styles
	
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().' /css/bootstrap.min.css');
	wp_enqueue_style('fontello', get_stylesheet_directory_uri().' /css/fontello.css');
	wp_enqueue_style('animate', get_stylesheet_directory_uri().' /css/animate.css');
	wp_enqueue_style('media', get_stylesheet_directory_uri().' /css/media.css');
	wp_enqueue_script('jquery', get_stylesheet_directory_uri().' /js/jquery-3.3.1.min.js');
	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().' /js/bootstrap.min.js');	
	
}

add_action('wp_enqueue_scripts','load_stylesheets');

function add_this_script_footer(){ 
	if(  is_front_page() && wp_script_is( 'jquery', 'done' )){
		wp_enqueue_script('myscriptforhomepage', get_stylesheet_directory_uri().' /js/script.js');
	} ;
}

add_action('wp_footer', 'add_this_script_footer'); 

add_action( 'after_setup_theme', 'wp_add_post_thumbnails' );
function wp_add_post_thumbnails(){
	// Поддержка миниатюр
	add_theme_support( 'post-thumbnails' );
}

// Polylang Shortcode - https://wordpress.org/plugins/polylang/
// Add this code in your functions.php
// Put shortcode [polylang] to post/page for display flags

function polylang_shortcode() {
	ob_start();
	pll_the_languages(array('show_flags'=>1,'show_names'=>0));
	$flags = ob_get_clean();
	return $flags;
}
add_shortcode( 'polylang', 'polylang_shortcode' );
