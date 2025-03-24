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
        'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields'), // Added thumbnail support
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
        'public'            => false,  // Disable public archive
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
