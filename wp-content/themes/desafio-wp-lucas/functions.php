<?php

/**
 * 	Movie App functions and definitions
 *  
 *  @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 *  @package Movie App
 * 
 * 
 */

remove_action('admin_print_scripts','print_emoji_detection_script');
remove_action('wp_print_styles','print_emoji_styles');
remove_action('admin_print_styles','print_emoji_styles');
remove_action('wp_head','rsd_link');
remove_action('wp_head','adjacent_posts_rel_link_wp_head',10,0);
remove_action('wp_head','feed_links_extra',3);
remove_action('wp_head','wp_generator');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','start_post_rel_link',10,0);
remove_action('wp_head','print_emoji_detection_script',7);




function movie_app_scripts(){

	wp_enqueue_script('aos-js', get_template_directory_uri() . '/js/aos.js', array(), '1.0', true);
	wp_enqueue_style('movie-app-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
	wp_enqueue_script( 'script-swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array( ), '', true );
	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array(  ), '', true );


}


add_action('wp_enqueue_scripts','movie_app_scripts');



//Supports,Custom Logo And Menu

function movie_lab_config(){

	register_nav_menus(
		array(
			'play_lab_main_menu' =>__('Play Lab Main Menu','bx-desafio'),
			'play_lab_footer_menu' =>__('Play Lab Footer Menu','bx-desafio'),
		)
		);

		add_theme_support('custom-logo',array(
			'height'=>85,
			'widh'=>180,	
			'flex_height'	=> true,
			'flex_width'	=> true,
		));


	add_theme_support( 'title-tag' );	
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );	

}
add_action('init','movie_lab_config');


//Taxonomy


function play_lab_config(){

	register_nav_menus(
		array(
			'play_lab_main_menu' =>__('Play Lab Main Menu','bx-desafio'),
			'play_lab_footer_menu' =>__('Play Lab Footer Menu','bx-desafio'),
		)
		);

		add_theme_support('custom-logo',array(
			'height'=>85,
			'widh'=>180,	
			'flex_height'	=> true,
			'flex_width'	=> true,
		));


	add_theme_support( 'title-tag' );		

}

add_action( 'after_setup_theme', 'play_lab_config', 0 );

require_once get_template_directory() . '/inc/wc-custom-post.php';
require_once get_template_directory() . '/inc/wc-helpers.php';
require_once get_template_directory() . '/inc/wc-menu-customize.php';
require_once get_template_directory() . '/inc/wc-metabox.php';
require_once get_template_directory() . '/inc/wc-taxonomy.php';
