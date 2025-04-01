<?php
$flexible_content = get_field('flexible_content');

foreach ($flexible_content as $section):
    if ($section['acf_fc_layout'] === 'client_logos'):
        ?>
        <section class="container client-logo-section-wrap">
            <h5 class="logo-section-title">I’ve collaborated with <span class="text-primary-color">global clients</span>,
                delivering projects with excellence.</h5>

            <div class="client-logo-wrap">
                <div class="swiper ClintLogoSwiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($section['client_project_logos'] as $logo): ?>
                            <div class="swiper-slide">
                                <div class="single-logo">
                                    <img src="<?php echo esc_attr($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    <?php endif; endforeach; ?>