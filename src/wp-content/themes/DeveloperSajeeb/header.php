<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Header Content Starts Here -->
    <nav class="top-navbar-container">
        <div class="navbar-wrap">
            <div>
                <a href="<?php echo home_url(); ?>"><img class="top-bar-logo"
                        src="<?php echo get_theme_mod('devsajeeb_logo'); ?>" alt="developer sajeeb"></a>
            </div>

            <div class="top-main-menu"><?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?></div>

            <div class="menu-lets-talk-container">
                <div class="lets-talk-wrap">
                    <a class="lets-talk-btn heading-font" href="<?php echo home_url(); ?>/contact">let,s talk</a>
                    <span class="lets-talk-hamburger"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/lets-talk-hamburger.png" alt=""></span>
                </div>

                <div class="lets-talk-aside-overly"></div>
                <aside class="lets-talk-aside">
                    <div class="lets-talk-aside-wrap">
                        <span class="sidebar-menu-close"><i class="fa-solid fa-xmark"></i></span>
                        <img class="top-bar-logo" src="<?php echo get_theme_mod('devsajeeb_logo'); ?>" alt="developer sajeeb">
                        <h2 class="heading-font tag-line"><?php echo esc_html(get_option('sidebar_description')); ?></h2>
                        <h4 class="sidebar-contact-heading">Location & Contact Info</h4>

                        <ul class="sidebar-contact-list">
                           <li class="sidebar-contact-item">
                               <span class="contact-item-icon"><i class="fa-regular fa-envelope"></i></span>
                               <a href="mailto:<?php echo esc_html(get_option('contact_email')) ?: '#'; ?>" class="contact-text" target="_blank"><?php echo esc_html(get_option('contact_email')) ?: 'N/A'; ?></a>
                           </li> 
                           <li class="sidebar-contact-item">
                               <span class="contact-item-icon"><i class="fa-solid fa-headset"></i></span>
                               <a href="tel:<?php echo esc_html(get_option('contact_number')) ?: '#'; ?>" class="contact-text" target="_blank"><?php echo esc_html(get_option('contact_number')) ?: 'N/A'; ?></a>
                           </li> 
                           <li class="sidebar-contact-item">
                               <span class="contact-item-icon"><i class="fa-solid fa-map-pin"></i></span>
                               <p class="contact-text"><?php echo esc_html(get_option('contact_location')) ?: 'N/A'; ?></p>
                           </li> 
                        </ul>

                        <h4 class="sidebar-follow-heading">Follow Me</h4>
                        <ul class="social-follow-list">
                            <?php 
                            $social_platforms = [
                                'facebook' => 'fa-facebook-f',
                                'youtube' => 'fa-youtube',
                                'linkedin' => 'fa-linkedin-in',
                                'github' => 'fa-github',
                                'dribbble' => 'fa-dribbble',
                                'x' => 'fa-x-twitter',
                                'instagram' => 'fa-instagram'
                            ];

                            foreach ($social_platforms as $platform => $icon_class) {
                                $link = get_option("social_{$platform}");
                                if (!empty($link)) {
                                    echo '<li><a class="social-icon" href="' . esc_url($link) . '" target="_blank"><i class="fa-brands ' . esc_attr($icon_class) . '"></i></a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="mobile-sidebar-menu">
                        <span class="sidebar-menu-close"><i class="fa-solid fa-xmark"></i></span>
                        <img class="top-bar-logo" src="<?php echo get_theme_mod('devsajeeb_logo'); ?>" alt="developer sajeeb">
                        <div class="mobile-menu-list">
                            <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </nav>
    <!-- Header Content Ends Here -->