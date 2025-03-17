<?php

?>
<footer>
    <section class="footer-section-container">
        <div class="container footer-wrap">
            <div class="left-side">
                <a href="<?php echo home_url(); ?>"><img class="top-bar-logo" src="<?php echo get_theme_mod('devsajeeb_logo'); ?>" alt="developer sajeeb"></a>
                <?php if (!empty(get_theme_mod('footer_short_description', ''))) { ?>
                    <p class="content"><?php echo esc_attr(get_theme_mod('footer_short_description', '')); ?></p>
                <?php } else {
                        echo '<p class="no-content-massage">Please add short description in Customize.</p>';
                    } 
                ?>
            </div>

            <div class="middle-content">
                <h6 class="heading-font">Quick Link</h6>
                <?php
                    if (get_theme_mod('footer_menu')) {
                        wp_nav_menu(array(
                            'menu' => get_theme_mod('footer_menu'),
                            'menu_class' => 'footer-nav',
                            'container' => 'nav',
                            'container_class' => 'footer-menu-wrap',
                            'menu_id' => 'footer-nav',
                        ));
                    } else {
                        echo '<p class="no-content-massage">Please select a footer menu in the Customize.</p>';
                    }
                ?>
            </div>

            <div class="right-side">
                <h6 class="heading-font">Contact Info</h6>

                <?php if (!empty(get_theme_mod('footer_email', ''))) { ?>
                    <p class="contact-item">
                        <span><i class="fa-regular fa-envelope"></i></span>
                        <a href="mailto:<?php echo esc_attr(get_theme_mod('footer_email', '')); ?>"><?php echo esc_html(get_theme_mod('footer_email', '')); ?></a>
                    </p>
                <?php } ?>
                
                <?php if (!empty(get_theme_mod('footer_phone', ''))) { ?>
                    <p class="contact-item">
                        <span><i class="fa-solid fa-headset"></i></span>
                        <a href="tel:<?php echo esc_attr(get_theme_mod('footer_phone', '')); ?>"><?php echo esc_html(get_theme_mod('footer_phone', '')); ?></a>
                    </p>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="footer-copyright-container container">
        <p>Copyright &copy;<?php echo date('Y'); ?>, All Rights Reserved</p>
        <ul class="footer-social-media">
            <li><a target="_blank" href="#">Facebook</a></li>
            <li><a target="_blank" href="#">YouTube</a></li>
            <li><a target="_blank" href="#">LinkedIn</a></li>
            <li><a target="_blank" href="#">Github</a></li>
            <li><a target="_blank" href="#">Dribbble</a></li>
            <li><a target="_blank" href="#">X</a></li>
            <li><a target="_blank" href="#">Instagram</a></li>
        </ul>

        <button class="back-to-top"><i class="fa-solid fa-arrows-up-to-line"></i></button>
    </section>
</footer>
<?php wp_footer(); ?>