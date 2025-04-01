<?php

// Register Custom Post Type: Portfolio
function custom_post_type_portfolio() {
    $labels = array(
        'name'                  => 'Portfolios',
        'singular_name'         => 'Portfolio',
        'menu_name'             => 'Portfolio',
        'name_admin_bar'        => 'Portfolio',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Portfolio',
        'new_item'              => 'New Portfolio',
        'edit_item'             => 'Edit Portfolio',
        'view_item'             => 'View Portfolio',
        'all_items'             => 'All Portfolios',
        'search_items'          => 'Search Portfolios',
        'not_found'             => 'No portfolios found.',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'menu_icon'             => 'dashicons-portfolio',
        'has_archive'           => false,  // Disable archive page
        'rewrite'               => array('slug' => 'portfolio'), // Custom URL slug
        'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies'            => array('portfolio_category', 'portfolio_tag'), // Added tag support
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'custom_post_type_portfolio');

// Register Custom Taxonomy: Portfolio Category
function custom_taxonomy_portfolio_category() {
    $labels = array(
        'name'              => 'Portfolio Categories',
        'singular_name'     => 'Portfolio Category',
        'menu_name'         => 'Portfolio Categories',
        'all_items'         => 'All Categories',
        'edit_item'         => 'Edit Category',
        'view_item'         => 'View Category',
        'update_item'       => 'Update Category',
        'add_new_item'      => 'Add New Category',
        'new_item_name'     => 'New Category Name',
        'search_items'      => 'Search Categories',
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'publicly_queryable'=> false,
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => false,  // Remove taxonomy from URL structure
        'rewrite'           => false,  // Remove category slug from URLs
    );

    register_taxonomy('portfolio_category', array('portfolio'), $args);
}
add_action('init', 'custom_taxonomy_portfolio_category');

// Register Custom Taxonomy: Portfolio Tag
function custom_taxonomy_portfolio_tag() {
    $labels = array(
        'name'              => 'Portfolio Tags',
        'singular_name'     => 'Portfolio Tag',
        'menu_name'         => 'Portfolio Tags',
        'all_items'         => 'All Tags',
        'edit_item'         => 'Edit Tag',
        'view_item'         => 'View Tag',
        'update_item'       => 'Update Tag',
        'add_new_item'      => 'Add New Tag',
        'new_item_name'     => 'New Tag Name',
        'search_items'      => 'Search Tags',
    );

    $args = array(
        'labels'            => $labels,
        'public'            => false,  // Disable public archive
        'hierarchical'      => false, // Tags are non-hierarchical
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => false,  // Remove taxonomy from URL structure
        'rewrite'           => false,  // Remove tag slug from URLs
    );

    register_taxonomy('portfolio_tag', array('portfolio'), $args);
}
add_action('init', 'custom_taxonomy_portfolio_tag');

// Register Custom Post Type: Client Testimonials
function custom_post_type_testimonials() {
    $labels = array(
        'name'                  => 'Testimonial',
        'singular_name'         => 'Testimonial',
        'menu_name'             => 'Testimonials',
        'name_admin_bar'        => 'Testimonials',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Testimonial',
        'new_item'              => 'New Testimonial',
        'edit_item'             => 'Edit Testimonial',
        'all_items'             => 'All Testimonial',
        'search_items'          => 'Search testimonial',
        'not_found'             => 'No testimonial found.',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'menu_icon'             => 'dashicons-format-quote',
        'has_archive'           => false,
        'rewrite'               => array('slug' => 'testimonial'),
        'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'publicly_queryable'    => false,
        'exclude_from_search'   => true,
        'show_in_rest'          => true,
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'custom_post_type_testimonials');