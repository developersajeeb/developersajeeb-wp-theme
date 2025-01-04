<?php

// Theme CSS and JS file calling
function css_js_files_calling() {
    // Enqueue the main stylesheet
    wp_enqueue_style('devsajeeb-main-style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
    
    // Enqueue the Font Awesome stylesheet
    wp_enqueue_style('devsajeeb-fontawesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), '6.7.2');

    // Enqueue the stylesheet (from Gulp compilation)
    wp_enqueue_style('devsajeeb-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');

    // Enqueue the main JavaScript file (from Gulp compilation)
    wp_enqueue_script('devsajeeb-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);

    // Enqueue jQuery (WordPress has built-in jQuery)
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'css_js_files_calling');
