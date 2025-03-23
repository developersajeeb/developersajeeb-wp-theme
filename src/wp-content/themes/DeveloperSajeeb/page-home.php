<?php
/*
 * Template Name: Front Page
 */
get_header();
$frontpage_id = get_option('page_on_front');

// echo "<pre style='color: #fff;'>";
// print_r($home_hero);
// echo "</pre>";
?>

<main>
    <!-- Hero Banner section start -->
    <section class="hero-bg">
        <div class="hero-section-container">
            <?php 
                $home_hero = get_field('home_hero'); 

                $call_text = $home_hero['hero_intro']['call_text'];
                $name = $home_hero['hero_intro']['my_name'];
                $title = $home_hero['hero_intro']['title'];
                $short_desc = $home_hero['hero_intro']['short_description'];
                $hero_btn = $home_hero['hero_intro']['hero_button'];

                $hero_image = $home_hero['home_hero_image'];

                $stats_numbers = $home_hero['stats_section'];
            ?>
            <div class="intro-text">
                <?php if (!empty($call_text)) : ?><h3 class="heading-font"><?php echo esc_attr($call_text) ?></h2><?php endif; ?>
                <?php if (!empty($name)) : ?><h2><?php echo esc_attr($name) ?></h2><?php endif; ?>
                <?php if (!empty($title)) : ?><h1><?php echo esc_attr($title) ?></h1><?php endif; ?>
                <?php if (!empty($title)) : ?><p class="content"><?php echo esc_attr($short_desc) ?></p><?php endif; ?>
                <?php if ($hero_btn) : ?>
                <a class="primary-color-btn" href="<?php echo !empty($hero_btn['url']) ? esc_url(home_url($hero_btn['url'])) : '#'; ?>" 
                    target="<?php echo !empty($hero_btn['target']) ? esc_attr($hero_btn['target']) : '_self'; ?>">
                    <?php echo esc_attr($hero_btn['title']); ?>
                    <span><i class="fa-solid fa-chevron-right"></i></span>
                </a>
                <?php endif; ?>
            </div>

            <div class="middle-image">
                <?php if (!empty($hero_image)) : ?>
                    <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>">
                <?php else : ?>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/no-image-placeholder.webp'); ?>" alt="Default Image">
                <?php endif; ?>
            </div>

            <div class="hero-right-content">
                <div class="right-content-wrap">
                    <?php if (!empty($stats_numbers['years_of_experience'])) : ?>
                        <h3><?php echo esc_attr($stats_numbers['years_of_experience']) ?>+</h3>
                        <p class="heading-font">Years Of Experience</p>
                    <?php endif; ?>
                    
                    <?php if (!empty($stats_numbers['project_complete'])) : ?>
                        <h3><?php echo esc_attr($stats_numbers['project_complete']) ?>+</h3>
                        <p class="heading-font">Project Complete</p>
                    <?php endif; ?>
                    
                    <?php if (!empty($stats_numbers['client_satisfactions'])) : ?>
                        <h3><?php echo esc_attr($stats_numbers['client_satisfactions']) ?>%</h3>
                        <p class="heading-font">Client Satisfactions</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="responsive-image">
            <div class="responsive-image-wrap">
                <img src="http://localhost/websites/src/wp-content/uploads/2025/03/Sajeeb-Debnath-home.png" alt="Developer Sajeeb">
            </div>
        </div>
    </section>
    <!-- Hero Banner section end -->
    
    <!-- About Us section end -->
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
    <!-- About Us section end -->
    
    <section>
        <!-- Work Experience section start -->
        <?php
        $working_experience = get_field('working_experience');
        if ($working_experience) : ?>
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
                <?php foreach ($working_experience as $experience) : ?>
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
        <?php endif; ?>
        <!-- Work Experience section end -->
        
        <!-- Services section start -->
        <?php get_template_part('template-part/service-list'); ?>
        <!-- Services section end -->
    </section>
    
    <!-- Skills section start -->
    <?php get_template_part('template-part/my-skills'); ?>
    <!-- Skills section end -->

    <!-- Portfolio section Start -->
     <?php get_template_part('template-part/portfolio-section'); ?>
     <!-- Portfolio section End -->
     
     <!-- Clients Testimonials section Start -->
     <?php get_template_part('template-part/clients-testimonials'); ?>
    <!-- Clients Testimonials section End -->

    <!-- CTA Section Start -->
     <section class="container cta-section-wrap">
        <div class="side-content">
            <h4 class="subtitle heading-font">Get In Touch</h4>
            <h2 class="title">Got a <span class="text-primary-color">Project</span> in Mind? Let’s Make It Happen!</h2>
            <p class="content side-sections-description">Ready to elevate your projects? Let’s discuss your ideas and collaborate to bring your vision to life!</p>

            <ul class="service-features-list">
                <li class="heading-font"><span><i class="fa-solid fa-check"></i></span>24/7 Super Support</li>
                <li class="heading-font"><span><i class="fa-solid fa-check"></i></span>Unlimited Revisions</li>
                <li class="heading-font"><span><i class="fa-solid fa-check"></i></span>High-Quality Work</li>
                <li class="heading-font"><span><i class="fa-solid fa-check"></i></span>Client-Centric Approach</li>
                <li class="heading-font"><span><i class="fa-solid fa-check"></i></span>Fast & Reliable Communication</li>
            </ul>
        </div>

        <div class="contact-form-wrap">
            <!-- Contact Form -->
        </div>
     </section>
    <!-- CTA Section End -->

    <!-- Blog Section Start -->
     <section class="blog-section-container">
        <div class="secondary-bg-color has-border-rounded">
            <div class="container blog-section-wrap">
                <div class="blog-heading">
                    <h4 class="subtitle heading-font">New & Blog</h4>
                    <h2 class="title">Latest News & <span class="text-primary-color">Blog</span></h2>
                </div>

                <div class="blog-items-wrap">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="https://wp.webtend.net/noxfolio/wp-content/uploads/2023/04/blog-09-min-768x417.jpg" alt="Blog Image">
                        </div>

                        <div class="blog-item-content">
                            <p class="category">Divi, WooCommerce, WordPress, Yoast</p>
                            <p class="blog-item-date heading-font"><span><i class="fa-regular fa-calendar-days"></i></span> 17th May 2025</p>
                            <h5>A Beginner’s Guide to Running Adventures</h5>

                            <a href="<?php echo home_url(); ?>/blog" class="read-more-btn">Read More <span><i class="fa-solid fa-link"></i></span></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="https://wp.webtend.net/noxfolio/wp-content/uploads/2023/04/blog-09-min-768x417.jpg" alt="Blog Image">
                        </div>

                        <div class="blog-item-content">
                            <p class="category">Divi, WooCommerce, WordPress, Yoast</p>
                            <p class="blog-item-date heading-font"><span><i class="fa-regular fa-calendar-days"></i></span> 17th May 2025</p>
                            <h5>A Beginner’s Guide to Running Adventures</h5>

                            <a href="<?php echo home_url(); ?>/blog" class="read-more-btn">Read More <span><i class="fa-solid fa-link"></i></span></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="https://wp.webtend.net/noxfolio/wp-content/uploads/2023/04/blog-09-min-768x417.jpg" alt="Blog Image">
                        </div>

                        <div class="blog-item-content">
                            <p class="category">Divi, WooCommerce, WordPress, Yoast</p>
                            <p class="blog-item-date heading-font"><span><i class="fa-regular fa-calendar-days"></i></span> 17th May 2025</p>
                            <h5>A Beginner’s Guide to Running Adventures</h5>

                            <a href="<?php echo home_url(); ?>/blog" class="read-more-btn">Read More <span><i class="fa-solid fa-link"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="blogs-more-btn-wrap">
                    <a href="<?php echo home_url(); ?>/blog" class="primary-color-btn more-blogs-btn">More Blogs <span><i class="fa-solid fa-chevron-right"></i></span></a>
                </div>
            </div>
        </div>
     </section>
    <!-- Blog Section End -->

    <!-- Client Logo Slider Section Start -->
     <section class="container client-logo-section-wrap">
        <h5 class="logo-section-title">I’ve collaborated with <span class="text-primary-color">global clients</span>, delivering projects with excellence.</h5>

        <div class="client-logo-wrap">
            <div class="swiper ClintLogoSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="single-logo">
                            <a href="#">
                                <img src="https://wp.webtend.net/noxfolio/wp-content/uploads/2023/11/client-logo8.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-logo">
                            <a href="#">
                                <img src="https://wp.webtend.net/noxfolio/wp-content/uploads/2023/11/client-logo8.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-logo">
                            <a href="#">
                                <img src="https://wp.webtend.net/noxfolio/wp-content/uploads/2023/11/client-logo8.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-logo">
                            <a href="#">
                                <img src="https://wp.webtend.net/noxfolio/wp-content/uploads/2023/11/client-logo8.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-logo">
                            <a href="#">
                                <img src="https://wp.webtend.net/noxfolio/wp-content/uploads/2023/11/client-logo8.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-logo">
                            <a href="#">
                                <img src="https://wp.webtend.net/noxfolio/wp-content/uploads/2023/11/client-logo8.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
     </section>
    <!-- Client Logo Slider Section End -->
</main>

<?php
get_footer();
?>