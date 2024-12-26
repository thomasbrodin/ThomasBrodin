<?php
/*
 * Template Name: About Me Page
 * 
 */


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

Timber::render(array('page-about-me.twig'), $context);