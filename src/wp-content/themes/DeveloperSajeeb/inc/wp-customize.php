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

    // Footer Menu
    $wp_customize->add_setting('footer_menu', array(
        'default' => '',
    ));

    $wp_customize->add_control('footer_menu', array(
        'label' => __('Footer Menu', 'developersajeeb'),
        'section' => 'devsajeeb_footer_option',
        'type' => 'select',
        'choices' => wp_get_nav_menus_as_options(),
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