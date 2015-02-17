<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

if (post_password_required($post->ID)){
	Timber::render('single-password.twig', $context);
} else {
	$context['title'] = $post->title();
	$context['images'] = get_field('proj_img');
	$context['caption'] = get_field('proj_caption');
	Timber::render(array('single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig'), $context);
}
