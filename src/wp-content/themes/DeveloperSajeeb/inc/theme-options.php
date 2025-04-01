<?php
// Add Theme Options Page to Admin Menu
function developersajeeb_theme_options_page() {
    add_menu_page(
        __('Theme Options', 'developersajeeb'),
        __('Theme Options', 'developersajeeb'),
        'manage_options',
        'theme-options',
        'developersajeeb_theme_create_page',
        'dashicons-admin-generic',
        110
    );
}
add_action('admin_menu', 'developersajeeb_theme_options_page');

// Theme Option Page Content
function developersajeeb_theme_create_page() {
    ?>
    <div class="wrap">
        <h1><?php _e('Theme Options', 'developersajeeb'); ?></h1>
        <div class="theme-options-container">
            <!-- Sidebar Menu -->
            <div class="theme-options-sidebar">
                <ul>
                    <li class="active" data-tab="sidebar"><?php _e('Sidebar', 'developersajeeb'); ?></li>
                    <li data-tab="contact"><?php _e('Contact Info', 'developersajeeb'); ?></li>
                    <li data-tab="social"><?php _e('Social Media', 'developersajeeb'); ?></li>
                </ul>
            </div>

            <!-- Content Section -->
            <div class="theme-options-content">
                <form method="post" action="options.php">
                    <?php
                        settings_fields('developersajeeb_options_group');
                    ?>

                    <!-- Sidebar Tab -->
                    <div class="tab-content active" id="sidebar">
                        <h2><?php _e('Sidebar', 'developersajeeb'); ?></h2>
                        <label><?php _e('Short Description', 'developersajeeb'); ?></label>
                        <textarea name="sidebar_description" rows="4"><?php echo esc_textarea(get_option('sidebar_description')); ?></textarea>
                    </div>

                    <!-- Contact Info Tab -->
                    <div class="tab-content" id="contact">
                        <h2><?php _e('Contact Info', 'developersajeeb'); ?></h2>
                        <label><?php _e('Email', 'developersajeeb'); ?></label>
                        <input type="text" name="contact_email" value="<?php echo esc_attr(get_option('contact_email')); ?>">

                        <label><?php _e('Phone Number', 'developersajeeb'); ?></label>
                        <input type="text" name="contact_number" value="<?php echo esc_attr(get_option('contact_number')); ?>">

                        <label><?php _e('Location', 'developersajeeb'); ?></label>
                        <input type="text" name="contact_location" value="<?php echo esc_attr(get_option('contact_location')); ?>">
                        
                        <label><?php _e('Contact Form Shortcode', 'developersajeeb'); ?></label>
                        <input type="text" name="contact_form_shortcode" value="<?php echo esc_attr(get_option('contact_form_shortcode')); ?>">
                    </div>

                    <!-- Social Media Tab -->
                    <div class="tab-content" id="social">
                        <h2><?php _e('Social Media Links', 'developersajeeb'); ?></h2>
                        <?php 
                        $social_platforms = ['facebook', 'youtube', 'linkedin', 'github', 'dribbble', 'x', 'instagram'];
                        foreach ($social_platforms as $platform) { ?>
                            <label><?php echo ucfirst($platform); ?> URL</label>
                            <input type="text" name="social_<?php echo $platform; ?>" value="<?php echo esc_attr(get_option("social_{$platform}")); ?>" placeholder="https://<?php echo $platform; ?>.com/yourprofile">
                        <?php } ?>
                    </div>

                    <?php submit_button(); ?>
                </form>
            </div>
        </div>
    </div>

    <!-- Styles -->
    <style>
        .theme-options-container {
            display: flex;
            flex-direction: row;
        }
        .theme-options-sidebar {
            width: 200px;
            background: #f1f1f1;
            padding: 15px;
            border-right: 1px solid #ddd;
        }
        .theme-options-sidebar ul {
            list-style: none;
            padding: 0;
        }
        .theme-options-sidebar li {
            padding: 10px;
            cursor: pointer;
            background: #fff;
            margin-bottom: 5px;
            border-radius: 4px;
            text-align: center;
            font-weight: bold;
        }
        .theme-options-sidebar li.active {
            background: #131313;
            color: #C9F31C;
        }
        .theme-options-content {
            flex: 1;
            padding: 20px;
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        .theme-options-content input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        @media screen and (max-width: 768px) {
            .theme-options-container {
                flex-direction: column;
            }

            .theme-options-sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #ddd;
            }

            .theme-options-sidebar ul {
                display: flex;
                gap: 10px;
                flex-wrap: wrap;
            }
            
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const tabs = document.querySelectorAll(".theme-options-sidebar li");
        const tabContents = document.querySelectorAll(".tab-content");

        tabs.forEach((tab) => {
            tab.addEventListener("click", function () {
                // Remove active class from all tabs
                tabs.forEach((t) => t.classList.remove("active"));
                this.classList.add("active");

                // Show the selected tab content
                const selectedTab = this.getAttribute("data-tab");
                tabContents.forEach((content) => {
                    content.classList.remove("active");
                });
                document.getElementById(selectedTab).classList.add("active");
            });
        });
    });
    </script>
    <?php
}

// Register Settings
function developersajeeb_custom_settings() {
    // Sidebar Settings
    register_setting('developersajeeb_options_group', 'sidebar_description');

    // Contact Info
    register_setting('developersajeeb_options_group', 'contact_email');
    register_setting('developersajeeb_options_group', 'contact_number');
    register_setting('developersajeeb_options_group', 'contact_location');
    register_setting('developersajeeb_options_group', 'contact_form_shortcode');

    // Social Media
    $social_platforms = ['facebook', 'youtube', 'linkedin', 'github', 'dribbble', 'x', 'instagram'];
    foreach ($social_platforms as $platform) {
        register_setting('developersajeeb_options_group', "social_{$platform}");
    }
}
add_action('admin_init', 'developersajeeb_custom_settings');
?>