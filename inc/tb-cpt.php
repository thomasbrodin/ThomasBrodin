<?php
/*
Plugin Name: TB Custom Post Types
Description: Custom Post Types for TB website.
*/


add_action( 'init', 'tb_cpt' );
add_action( 'init', 'portfolio_taxonomies' );
add_action( 'init','maybe_rewrite_rules' );

function tb_cpt() {
  /**
  * Projects post type
  */
  $labels  = array(
            'name' => 'Portfolio',
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
            'menu_name' => 'Portfolio'
            );
  $args = array(
        'labels' => $labels,
        'description' => 'Thomas Brodin Portfolio',
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
        'rewrite' => array( 'slug' => 'work'),
      );
  register_post_type( 'portfolio', $args);
}

function portfolio_taxonomies() {
  register_taxonomy(
    'project_category',
    'portfolio',
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
    array('portfolio'),
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
