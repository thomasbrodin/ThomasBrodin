<?php
/*
Plugin Name: HEX Custom Post Types
Description: Custom Post Types for HEX websites.
Author: Thomas Brodin
Author URI: http://www.hexcreativenetwork.com
*/


add_action( 'init', 'hex_cpt' );
add_action( 'init', 'portfolio_taxonomies' );  

function hex_cpt() {
  $labels  = array(
            'name' => 'Portfolio',
            'singular_name' => 'Project',
            'add_new' => __( 'Add New Project' ),
            'add_new_item' => __( 'Add New Project' ),
            );
  $args = array(
        'labels' => $labels,
        'description' => 'Thomas Brodin Photography Portfolio',
        'menu_icon'=> 'dashicons-portfolio',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions',),
        'rewrite' => array( 'slug' => 'portfolio', 'with_front' => false ),
      );
  register_post_type( 'portfolio', $args);
}

function portfolio_taxonomies() {  
  register_taxonomy(  
    'portfolio-category',  
    'portfolio',
      array( 
          'hierarchical' => true,  
          'label' => 'Portfolio Categories', 
          'show_admin_column' => true, 
          'query_var' => true,  
          'rewrite' => array('slug' => 'portfolio-categories')  
      )  
    ); 
  register_taxonomy(  
    'portfolio-tag',  
    'portfolio',
      array( 
          'hierarchical' => false,  
          'label' => 'Portfolio Tags', 
          'show_admin_column' => true, 
          'query_var' => true,  
          'rewrite' => array('slug' => 'portfolio-tags')  
      )  
    );  
}  
