<?php
/**
 * The template for Taxonomy 
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package 	WordPress
 * @subpackage 	Timber
 * @since 		Timber 0.1
 */

$context = Timber::get_context();

$templates = array('taxonomy.twig', 'archive.twig', 'index.twig');

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
$term_name = $term->name;
$post_type = get_post_type();
$cpt_obj = get_post_type_object($post_type);
$cpt = $cpt_obj->labels->name;

$context['title'] = $term_name;
$context['cpt_title'] = $term_name;
$context['cpt'] = $post_type;

$argp = array(      
			'orderby' => 'term_order',       
        	'hide_empty' => false,
        	'parent' => 0    
        );      
$context['photo_categories'] = Timber::get_terms('photo_category', $argp);
$argw = array(      
			'orderby' => 'term_order',       
        	'hide_empty' => false,
        	'parent' => 0    
        );      
$context['project_categories'] = Timber::get_terms('project_category', $argw);
	
Timber::render($templates, $context);
