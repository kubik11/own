<?php
	// set up
	add_theme_support( 'menus' ); // включаем поддержку меню
	add_theme_support( 'post-thumbnails' ); // включаем поддержку картинок
	// includes
	include( get_template_directory() . '/includes/front/enqueue.php');
	include( get_template_directory() . '/includes/front/setup.php');
	include( get_template_directory() . '/includes/front/exserpt.php');
	// actions and filter hooks
	add_action( 'wp_enqueue_scripts', 'herr_enqueue');
	add_action( 'after_setup_theme', 'register_menu' );

	add_filter( 'excerpt_length', 'exserpt_length_control' );
	// Delete the brackets at the end
	add_filter('excerpt_more', function($more) {
		return '...';
	});
?>