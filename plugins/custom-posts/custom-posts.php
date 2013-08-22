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
?>