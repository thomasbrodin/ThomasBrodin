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
  /**
  * Photography post type
  */
  $labels  = array(
            'name' => 'Photography',
            'singular_name' => 'Photography',
            'add_new' => __( 'Add New' ),
            'add_new_item' => __( 'Add New' ),
            );
  $args = array(
        'labels' => $labels,
        'description' => 'Thomas Brodin Photography Portfolio',
        'menu_icon'=> 'dashicons-portfolio',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 0,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions',),
        'rewrite' => array( 'slug' => 'photography'),
      );
  register_post_type( 'photography', $args);
  /**
  * Projects post type
  */
  $labels  = array(
            'name' => 'Art Direction',
            'singular_name' => 'Project',
            'add_new' => 'Add New Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'all_items' => 'All Projects',
            'view_item' => 'View Project',
            'search_items' => 'Search Projects',
            'not_found' =>  'No projects found',
            'not_found_in_trash' => 'No projects found in Trash',
            'parent_item_colon' => '',
            'menu_name' => 'Art Direction'
            );
  $args = array(
        'labels' => $labels,
        'description' => 'Thomas Brodin Creative Direction Portfolio',
        'menu_icon'=> 'dashicons-portfolio',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 0,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions',),
        'rewrite' => array( 'slug' => 'art-direction'),
      );
  register_post_type( 'creative-direction', $args);
}

function portfolio_taxonomies() {
  register_taxonomy(
    'photo_category',
    'photography',
      array(
          'hierarchical' => true,
          'label' => 'Photo Category',
          'show_admin_column' => true,
          'query_var' => true,
          'rewrite' => array('slug' => 'photo')
      )
    );
  register_taxonomy(
    'project_category',
    'creative-direction',
      array(
          'hierarchical' => true,
          'label' => 'Project Category',
          'show_admin_column' => true,
          'query_var' => true,
          'rewrite' => array('slug' => 'projects')
      )
    );
  register_taxonomy(
    'tb_tag',
    array('photography','creative-direction'),
      array(
          'hierarchical' => false,
          'label' => 'Tags',
          'show_admin_column' => true,
          'query_var' => true,
          'rewrite' => array('slug' => 'tb-tag')
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
