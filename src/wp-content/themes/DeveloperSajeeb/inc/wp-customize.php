<?php

// WordPress Customization Function
function wp_customize_register( $wp_customize ) {

    //Header Area Function
    $wp_customize->add_section("devsajeeb_header_area", array(
        "title" => __("Header Area", "developersajeeb"),
        "description" => __("Upload logo from here.", "developersajeeb"),
    ));

    $wp_customize->add_setting("devsajeeb_logo", array(
        "default" => get_bloginfo("template_directory") . "/img/ds-logo.png",
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'devsajeeb_logo', array(
        'label' => 'Logo Upload',
        'description' => 'max width 160px',
        'setting' => 'devsajeeb_logo',
        'section' => 'devsajeeb_header_area',
    )));

    // Footer Area Section
    $wp_customize->add_section("devsajeeb_footer_area", array(
        "title" => __("Footer Area", "developersajeeb"),
        "description" => __("Customize your footer area.", "developersajeeb"),
    ));

    // Footer Menu
    $wp_customize->add_setting('footer_menu', array(
        'default' => '',
    ));

    $wp_customize->add_control('footer_menu', array(
        'label' => __('Footer Menu', 'developersajeeb'),
        'section' => 'devsajeeb_footer_area',
        'type' => 'select',
        'choices' => wp_get_nav_menus_as_options(),
    ));

    // Footer Short Description
    $wp_customize->add_setting('footer_short_description', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_short_description', array(
        'label' => __('Footer Short Description', 'developersajeeb'),
        'section' => 'devsajeeb_footer_area',
        'type' => 'textarea',
    ));
}

function wp_get_nav_menus_as_options() {
    $menus = wp_get_nav_menus();
    $options = array();

    foreach ($menus as $menu) {
        $options[$menu->term_id] = $menu->name;
    }
    return $options;
}

add_action('customize_register', 'wp_customize_register');