<?php
/**
 * The template for Front Page
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package 	WordPress
 * @subpackage 	Timber
 * @since 		Timber 0.1
 */
	global $proc;
	if (!class_exists('Timber')){
		echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
	}
	$context = Timber::get_context();
	$args = array(
		'post_type' => 'portfolio', 
		'tax_query' => array(
							array(
							'taxonomy' => 'portfolio-category',
							'field' => 'slug',
							'terms' => 'feature'
							)
						),
		'numberposts' => -1
	);
	$context['posts'] = Timber::get_posts($args);

	Timber::render('home.twig', $context);


