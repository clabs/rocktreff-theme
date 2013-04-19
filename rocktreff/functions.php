<?php

add_theme_support( 'post-thumbnails' );


function band_custom_init() {
  $args = array(
		'labels' => array(
			'name' => _x('Bands', 'post type general name'),
			'singular_name' => _x('Bands', 'post type singular name'),
		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => null,
		'rewrite' => array('slug' => 'bands'),
		'taxonomies' => array(
			'category', 'post_tag'
		),
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'comments' )
  ); 
  register_post_type('band',$args);
}
add_action( 'init', 'band_custom_init' );

function partner_custom_init() {
  $args = array(
		'labels' => array(
			'name' => _x('Partner', 'post type general name'),
			'singular_name' => _x('Partner', 'post type singular name' ),
		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'page',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => null,
		'rewrite' => array('slug' => 'partner'),
		'taxonomies' => array(
			'category', 'post_tag'
		),
		'supports' => array( 'title', 'thumbnail', 'custom-fields', 'editor' )
  ); 
  register_post_type('partner',$args);
}
add_action( 'init', 'partner_custom_init' );


?>