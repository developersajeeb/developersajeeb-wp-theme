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
                        <h2 class="heading-font tag-line">Unique Digital Ideas or Solutions for Successful Business</h2>
                        <h4 class="sidebar-contact-heading">Location & Contact Info</h4>

                        <ul class="sidebar-contact-list">
                           <li class="sidebar-contact-item">
                               <span class="contact-item-icon"><i class="fa-regular fa-envelope"></i></span>
                               <a href="mailto:info@developersajeeb.com" class="contact-text" target="_blank">info@developersajeeb.com</a>
                           </li> 
                           <li class="sidebar-contact-item">
                               <span class="contact-item-icon"><i class="fa-solid fa-headset"></i></span>
                               <a href="tel:+8801743370840" class="contact-text" target="_blank">+8801743370840</a>
                           </li> 
                           <li class="sidebar-contact-item">
                               <span class="contact-item-icon"><i class="fa-solid fa-map-pin"></i></span>
                               <a href="https://maps.app.goo.gl/hGfuDqyv3L2qwU457" class="contact-text" target="_blank">Dhaka, Bangladesh</a>
                           </li> 
                        </ul>

                        <h4 class="sidebar-follow-heading">Follow Me</h4>
                        <ul class="social-follow-list">
                            <li><a class="social-icon" href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="social-icon" href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a class="social-icon" href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a class="social-icon" href="#" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                            <li><a class="social-icon" href="#" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                            <li><a class="social-icon" href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a class="social-icon" href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
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