<?php
/*
 * Template Name: About Page
 */
get_header();
?>
<main class="about-page-container">
    <section class="container common-page-hero">
        <div class="common-page-hero-title">
            <h1>About Me</h1>
            <img src="<?php echo get_template_directory_uri() . '/img/leaf.png'; ?>" alt="icon">
        </div>
        <h2 class="heading-font">Get to Know Me Better</h2>
    </section>

    <!-- About Us section Start -->
    <div class="about-me-section">
        <?php get_template_part('template-part/about-me'); ?>
    </div>
    <!-- About Us section end -->

    <!-- Work Experience section start -->
    <?php
    $flexible_content = get_field('flexible_content');
    foreach ($flexible_content as $section):
        if ($section['acf_fc_layout'] === 'working_experience' && !empty($section['working_experience_details'])): ?>
            <section>
                <div class="container experience-section-wrap">
                    <div class="icon-wrap">
                        <div class="icon">
                            <i class="fa-solid fa-code"></i>
                        </div>
                    </div>

                    <div class="experience-content">
                        <h4 class="subtitle heading-font">Work Experience</h4>
                        <h2 class="title">My <span>Professional</span> Journey & Experience</h2>

                        <div class="experience-wrap">
                            <?php foreach ($section['working_experience_details'] as $experience): ?>
                                <div class="experience-card">
                                    <span class="icon"><i class="fa-solid fa-arrow-up-right-dots"></i></span>
                                    <div class="details">
                                        <p>
                                            <?php
                                            // Convert Start Date (MM/YYYY) to "Mon YYYY"
                                            if (!empty($experience['start_date'])) {
                                                $start_date_parts = explode('/', $experience['start_date']);
                                                $start_month = DateTime::createFromFormat('!m', $start_date_parts[0])->format('M');
                                                $start_year = $start_date_parts[1];
                                                $start_date = $start_month . '. ' . $start_year;
                                            } else {
                                                $start_date = 'N/A';
                                            }

                                            // Convert End Date or Show "Present"
                                            if (!empty($experience['present'])) {
                                                $end_date = 'Present';
                                            } elseif (!empty($experience['end_date'])) {
                                                $end_date_parts = explode('/', $experience['end_date']);
                                                $end_month = DateTime::createFromFormat('!m', $end_date_parts[0])->format('M');
                                                $end_year = $end_date_parts[1];
                                                $end_date = $end_month . '. ' . $end_year;
                                            } else {
                                                $end_date = 'Present';
                                            }

                                            echo esc_html($start_date) . ' - ' . esc_html($end_date);
                                            ?>
                                        </p>
                                        <h6><?php echo esc_html($experience['job_title']); ?></h6>
                                        <span class="heading-font"><?php echo esc_html($experience['company_name']); ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; endforeach; ?>
    <!-- Work Experience section end -->

    <!-- Services section start -->
    <?php get_template_part('template-part/service-list'); ?>
    <!-- Services section end -->

    <!-- Skills section start -->
    <?php get_template_part('template-part/my-skills'); ?>
    <!-- Skills section end -->

    <!-- Clients Testimonials section Start -->
    <div class="testimonials-section">
        <?php get_template_part('template-part/clients-testimonials'); ?>
    </div>
    <!-- Clients Testimonials section End -->

    <!-- FAQ section Start -->
    <section class="about-faq-section">
        <?php
        $flexible_content = get_field('flexible_content');
        foreach ($flexible_content as $section):
            if ($section['acf_fc_layout'] === 'faq' && !empty($section['faq_section'])): ?>
                <div class="container faq-wrap">
                    <div class="faq-section-heading">
                        <h4 class="subtitle heading-font">FAQ</h4>
                        <h2 class="title">Frequently Asked <span>Questions</span></h2>
                    </div>

                    <div class="faq-items">
                        <?php foreach ($section['faq_section'] as $index => $item): ?>
                            <div class="faq" aria-expanded="false">
                                <button class="answer-button" id="accordion-button-<?php echo esc_attr($index); ?>">
                                    <span><?php echo esc_html($item['question']); ?></span>
                                    <span class="toggle-icon"><i class="fa-solid fa-plus"></i></span>
                                </button>
                                <div class="answer">
                                    <?php echo wp_kses_post($item['answer']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; endforeach; ?>
    </section>
    <!-- FAQ section End -->
</main>
<?php
get_footer();
?>