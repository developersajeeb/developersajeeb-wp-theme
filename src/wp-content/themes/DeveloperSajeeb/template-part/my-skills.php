<?php
$flexible_content = get_field('flexible_content');

foreach ($flexible_content as $section):
    if ($section['acf_fc_layout'] === 'skill_set'):

        $heading = $section['skill_section_heading'];
        $description = $section['skill_section_description'];
        $button = $section['more_details_button'];
        ?>
        <section class="skills-section-container">
            <div class="secondary-bg-color has-border-rounded">
                <div class="container skills-section-wrap">
                    <div class="skills-section-content">
                        <div class="skills-content-wrap">
                            <h4 class="subtitle heading-font">My Skills</h4>
                            <h2 class="title"><?php echo wp_kses_post($heading); ?></span></h2>
                            <p class="content skills-sections-description"><?php echo esc_attr($description); ?></p>

                            <?php if ($button): ?>
                                <a class="primary-color-btn more-details-btn"
                                    href="<?php echo !empty($button['url']) ? esc_url(home_url($button['url'])) : '#'; ?>"
                                    target="<?php echo !empty($button['target']) ? esc_attr($button['target']) : '_self'; ?>">
                                    <?php echo esc_attr($button['title']); ?>
                                    <span><i class="fa-solid fa-chevron-right"></i></span>
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="right-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/skills-section-image.png"
                                alt="Skills And Idea Image">
                        </div>
                    </div>

                    <div class="skills-items-wrap">
                        <?php foreach ($section['technologies'] as $technology): ?>
                            <div class="item">
                                <img src="<?php echo esc_url($technology['technology_logo']['url']); ?>"
                                    alt="<?php echo esc_attr($technology['technology_logo']['alt']); ?>">
                                <p class="heading-font"><?php echo esc_attr($technology['technology_name']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="bg-color"></div>
            </div>
        </section>
    <?php endif; endforeach; ?>