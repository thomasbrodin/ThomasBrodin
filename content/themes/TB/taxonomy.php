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
$context['title'] = $term_name;

Timber::render($templates, $context);
