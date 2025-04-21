<?php
$flexible_content = get_field('flexible_content');

foreach ($flexible_content as $section):
    if ($section['acf_fc_layout'] === 'about_me'):

        $heading = $section['about_heading'];
        $description = $section['about_description'];
        $service_name_list = $section['service_name_list'];
        $button = $section['my_story_button'];
        ?>
        <section class="about-us-container">
            <div class="secondary-bg-color has-border-rounded">
                <div class="container about-us-wrap">
                    <div class="about-us-content">
                        <h4 class="subtitle heading-font">About Me</h4>
                        <?php if (!empty($heading)): ?>
                            <h2 class="title"><?php echo wp_kses_post($heading); ?></h2><?php endif; ?>
                        <?php if (!empty($description)): ?>
                            <p class="content about-us-description"><?php echo wp_kses_post($description); ?></p>
                        <?php endif; ?>

                        <?php if (!empty($service_name_list) && is_array($service_name_list)): ?>
                            <ul class="skills-category">
                                <?php foreach ($service_name_list as $service): ?>
                                    <li>
                                        <span class="list-icon"><i class="fa-solid fa-check"></i></span>
                                        <span class="list-text heading-font"><?php echo esc_html($service['service_name']); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <?php if ($button): ?>
                            <a class="primary-color-btn my-story-btn"
                                href="<?php echo !empty($button['url']) ? esc_url(home_url($button['url'])) : '#'; ?>"
                                target="<?php echo !empty($button['target']) ? esc_attr($button['target']) : '_self'; ?>">
                                <?php echo esc_attr($button['title']); ?>
                                <span><i class="fa-solid fa-chevron-right"></i></span>
                            </a>
                        <?php endif; ?>

                    </div>
                    <img class="glob-img-for-bg" src="<?php echo get_template_directory_uri(); ?>/img/global-shape.svg"
                        alt="Global Image">

                    <div class="about-us-images">
                        <img class="glob-img" src="<?php echo get_template_directory_uri(); ?>/img/global-shape.svg"
                            alt="Global Image">
                    </div>
                </div>
            </div>
        </section>
    <?php endif; endforeach; ?>