<section class="about-us-container">
        <div class="secondary-bg-color has-border-rounded">
            <div class="container about-us-wrap">
                <div class="about-us-content">
                    <h4 class="subtitle heading-font">About Me</h4>
                    <?php
                        $about_content = get_field('about_section');
                        $about_title = $about_content['about_heading'];
                        $about_description = $about_content['about_description'];
                        $about_service_name = $about_content['service_name'];
                    ?>
                    <?php if (!empty($about_title)) : ?><h2 class="title"><?php echo wp_kses_post($about_title); ?></h2><?php endif; ?>
                    <?php if (!empty($about_description)) : ?><p class="content about-us-description"><?php echo esc_attr($about_description); ?></p><?php endif; ?>
    
                    <?php if (!empty($about_service_name) && is_array($about_service_name)) : ?>
                        <ul class="skills-category">
                            <?php foreach ($about_service_name as $service) : ?>
                                <li>
                                    <span class="list-icon"><i class="fa-solid fa-check"></i></span> 
                                    <span class="list-text heading-font"><?php echo esc_html($service); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
    
                </div>
                <img class="glob-img-for-bg" src="<?php echo get_template_directory_uri(); ?>/img/global-shape.svg" alt="Global Image">
        
                <div class="about-us-images">
                    <img class="glob-img" src="<?php echo get_template_directory_uri(); ?>/img/global-shape.svg" alt="Global Image">
                </div>
            </div>
        </div>
    </section>