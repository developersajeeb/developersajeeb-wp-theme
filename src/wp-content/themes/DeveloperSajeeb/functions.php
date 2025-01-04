<?php 
/*
 * My theme function 
 */

//Theme Title
add_theme_support('title-tag');

//WP Menu Register
register_nav_menu('main_menu', __('Main Menu', 'developersajeeb'));

//Thumbnail Support
add_theme_support('post-thumbnails', array('page', 'post'));

//Theme CSS and Js file calling
include_once('inc/enqueue.php');

// WordPress Customization Function
include_once('inc/wp-customize.php');

?>