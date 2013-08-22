<?php
   /*
   Plugin Name: Custom Posts
   Description: A plugin that allows for custom post types for portfolio websites
   Version: 1.0
   Author: KeVon Ticer
   */
  
  /*************************************

	Custom Post Code for portfolio pieces

  *************************************/
  function custom_post_portfolio() {
		$labels = array(
		'name'               => _x( 'Portfolios', 'post type general name' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'portfolio' ),
		'add_new_item'       => __( 'Add New Portfolio' ),
		'edit_item'          => __( 'Edit Portfolio' ),
		'new_item'           => __( 'New Portfolio' ),
		'all_items'          => __( 'All Portfolios' ),
		'view_item'          => __( 'View Portfolio' ),
		'search_items'       => __( 'Search Portfolios' ),
		'not_found'          => __( 'No portfolios found' ),
		'not_found_in_trash' => __( 'No portfolios found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Portfolios'
	);
	$args = array(
		'labels'        => $labels,
		'taxonomies'	=> array('category'),
		'description'   => 'Data as it relates to portfolio pieces',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
		register_post_type( 'portfolio', $args );	
	}

	add_action( 'init', 'custom_post_portfolio' );

	function custom_post_fportfolio() {
		$labels = array(
		'name'               => _x( 'Feature Portfolios', 'post type general name' ),
		'singular_name'      => _x( 'Feature Portfolio', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'portfolio' ),
		'add_new_item'       => __( 'Add New Feature Portfolio' ),
		'edit_item'          => __( 'Edit Feature Portfolio' ),
		'new_item'           => __( 'New Feature Portfolio' ),
		'all_items'          => __( 'All Feature Portfolios' ),
		'view_item'          => __( 'View Feature Portfolio' ),
		'search_items'       => __( 'Search Feature Portfolios' ),
		'not_found'          => __( 'No feature portfolios found' ),
		'not_found_in_trash' => __( 'No feature portfolios found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Feature Portfolios'
	);
	$args = array(
		'labels'        => $labels,
		'taxonomies'	=> array('category'),
		'description'   => 'Data as it relates to feature portfolio pieces',
		'public'        => true,
		'menu_position' => 6,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
		register_post_type( 'feature_portfolio', $args );	
	}

	add_action( 'init', 'custom_post_fportfolio' );
?>