<?php
/*
 * Template Name: About Page
 *
 */


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

Timber::render(array('page-case-studies.twig'), $context);
