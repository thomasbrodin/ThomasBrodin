<?php
/*
 * Template Name: Photography Page
 *
 */


$context = Timber::get_context();

$args = array(
    'post_type' => array('portfolio'),
    'numberposts' => -1,
    'post_status' => 'publish',
    'orderby' => 'menu_order',
    'order'         => 'ASC',
    'suppress_filters' => false,
    'tax_query' => array(
        array(
            'taxonomy' => 'tb_tag',
            'field' => 'slug',
            'terms' => 'featured',
            'operator' => 'IN'
        )
    )
);
$context['posts'] = Timber::get_posts($args);

//Get a term with a slug
$context['photo'] = new Timber\Term('photo');

Timber::render(array('page-photography.twig'), $context);
