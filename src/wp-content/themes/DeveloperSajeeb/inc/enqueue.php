<?php

// Theme CSS and JS file calling
function css_js_files_calling() {
    // Enqueue the main stylesheet
    wp_enqueue_style('devsajeeb-main-style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
    
    // Enqueue the Font Awesome stylesheet
    wp_enqueue_style('devsajeeb-fontawesome-style', get_template_directory_uri() . '/src/plugins-styles/fontawesome/all.min.css', array(), '6.7.2');
    
    // Enqueue the Font Awesome stylesheet
    wp_enqueue_style('devsajeeb-swiperjs-style', get_template_directory_uri() . '/src/plugins-styles/swiperjs/swiper-bundle.min.css', array(), '11.2.5');

    // Enqueue the stylesheet (from Gulp compilation)
    wp_enqueue_style('devsajeeb-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');

    // Enqueue the GSAP and other helper Js files
    wp_enqueue_script('devsajeeb-lenis', get_template_directory_uri() . '/src/js/gsap/lenis.min.js', array(), '1.1.19', true);
    wp_enqueue_script('devsajeeb-gsap', get_template_directory_uri() . '/src/js/gsap/gsap.min.js', array(), '3.12.7', true);
    wp_enqueue_script('devsajeeb-gsap-scrollTrigger', get_template_directory_uri() . '/src/js/gsap/ScrollTrigger.min.js', array(), '3.12.7', true);

    // Enqueue the main JavaScript file (from Gulp compilation)
    wp_enqueue_script('devsajeeb-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);

    // Enqueue the Font Awesome Js
    wp_enqueue_script('devsajeeb-fontawesome-js', get_template_directory_uri() . '/src/js/fontawesome/all.min.js', array(), '6.7.2', true);
    
    // Enqueue the SwiperJS file
    wp_enqueue_script('devsajeeb-swiper-js', get_template_directory_uri() . '/src/js/swiperjs/swiper-bundle.min.js', array(), '11.2.5', true);

    // Enqueue jQuery (WordPress has built-in jQuery)
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'css_js_files_calling');
