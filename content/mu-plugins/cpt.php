<?php
/*
Plugin Name: HEX Custom Post Types
Description: Custom Post Types for HEX websites.
Author: Thomas Brodin
Author URI: http://www.hexcreativenetwork.com
*/


add_action( 'init', 'hex_cpt' );
add_action( 'init', 'portfolio_taxonomies' );  
add_action( 'init','maybe_rewrite_rules' );

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
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 0,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions',),
        'rewrite' => array( 'slug' => 'portfolio', 'with_front' => false),
      );
  register_post_type( 'portfolio', $args);
}

function portfolio_taxonomies() {  
  register_taxonomy(  
    'portfolio-category',  
    'portfolio',
      array( 
          'hierarchical' => true,  
          'label' => 'Project Categories', 
          'show_admin_column' => true, 
          'query_var' => true,  
          'rewrite' => array('slug' => 'work','with_front' => false)  
      )  
    ); 
  register_taxonomy(  
    'portfolio-tag',  
    'portfolio',
      array( 
          'hierarchical' => false,  
          'label' => 'Project Tags', 
          'show_admin_column' => true, 
          'query_var' => true,  
          'rewrite' => array('slug' => 'type','with_front' => false)  
      )  
    );  
   function maybe_rewrite_rules() {
     
      $ver = filemtime( __FILE__ ); // Get the file time for this file as the version number
      $defaults = array( 'version' => 0, 'time' => time() );
      $r = wp_parse_args( get_option( __CLASS__ . '_flush', array() ), $defaults );
     
      if ( $r['version'] != $ver || $r['time'] + 172800 < time() ) { // Flush if ver changes or if 48hrs has passed.
        flush_rewrite_rules();
        // trace( 'flushed' );
        $args = array( 'version' => $ver, 'time' => time() );
        if ( ! update_option( __CLASS__ . '_flush', $args ) )
          add_option( __CLASS__ . '_flush', $args );
      }
     
    }
}  
