<?php
/*
 * Template Name: Front Page
 */
get_header();

$frontpage_id = get_option('page_on_front');

// echo "<pre>";
// print_r($works_query->posts);
// echo "</pre>";
?>

<main>
    <!-- Hero Banner section start -->
    <section class="hero-bg">
        <div class="hero-section-container">
            <div class="intro-text">
                <h3 class="heading-font">Hello, i’m</h2>
                <h2>Sajeeb Debnath</h1>
                <h1>Web Developer</h3>
                <p class="content">Designing and Developing Interactive Web Platforms That Reflect Your Brand’s Identity and Achieve Your Goals!</p>
                <a href="<?php echo home_url(); ?>/contact" class="primary-color-btn">Hire Me <span><i class="fa-solid fa-chevron-right"></i></span></a>
            </div>

            <div class="middle-image">
                <img src="http://localhost/developersajeeb/src/wp-content/uploads/2025/03/Sajeeb-Debnath-home.png" alt="Developer Sajeeb">
            </div>

            <div class="hero-right-content">
                <div class="right-content-wrap">
                    <h3>4+</h3>
                    <p class="heading-font">Years Of Experience</p>
                    <h3>110+</h3>
                    <p class="heading-font">Project Complete</p>
                    <h3>99%</h3>
                    <p class="heading-font">Client Satisfactions</p>
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
                    <h2 class="title">Professional Solutions for <span class="text-primary-color">Complex Digital</span> Product Challenges</h2>
                    <p class="content about-us-description">As an experienced web developer, I specialize in frontend technologies like HTML, CSS, SCSS, Tailwind, Bootstrap, and Material UI, and I am skilled in React.js, TypeScropt, Next.js, Node.js, Express, MongoDB, and also WordPress. I also have a solid understanding of SEO and expertise in UI design, where I combine aesthetic precision with functionality to craft engaging user experiences.</p>
    
                    <ul class="skills-category">
                        <li><span class="list-icon"><i class="fa-solid fa-check"></i></span> <span class="list-text heading-font">Web Design</span></li>
                        <li><span class="list-icon"><i class="fa-solid fa-check"></i></span> <span class="list-text heading-font">Web Development</span></li>
                        <li><span class="list-icon"><i class="fa-solid fa-check"></i></span> <span class="list-text heading-font">Ui/UX Design</span></li>
                        <li><span class="list-icon"><i class="fa-solid fa-check"></i></span> <span class="list-text heading-font">SEO</span></li>
                    </ul>
    
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
        <div class="container experience-section-wrap">
            <div class="icon-wrap">
                <div class="icon">
                    <i class="fa-solid fa-code"></i>
                </div>
            </div>

            <div class="experience-content">
                <h4 class="subtitle heading-font">My Resume</h4>
                <h2 class="title">Real <span class="text-primary-color">Solutions</span> for Web Challenges</h2>

                <div class="experience-wrap">
                    <div class="experience-card">
                        <span class="icon"><i class="fa-solid fa-arrow-up-right-dots"></i></span>
                        <div class="details">
                            <p>2023 - Present</p>
                            <h6>Jr. Web Developer</h6>
                            <span class="heading-font">CodersBucket</span>
                        </div>
                    </div>
                    <div class="experience-card">
                        <span class="icon"><i class="fa-solid fa-arrow-up-right-dots"></i></span>
                        <div class="details">
                            <p>2023 - Present</p>
                            <h6>Jr. Web Developer</h6>
                            <span class="heading-font">CodersBucket</span>
                        </div>
                    </div>
                    <div class="experience-card">
                        <span class="icon"><i class="fa-solid fa-arrow-up-right-dots"></i></span>
                        <div class="details">
                            <p>2023 - Present</p>
                            <h6>Jr. Web Developer</h6>
                            <span class="heading-font">CodersBucket</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Work Experience section end -->
        
        <!-- Services section start -->
        <div class="container services-section-wrap">
            <div class="services-heading">
                <h4 class="subtitle heading-font">Popular Services</h4>
                <h2 class="title">My <span class="text-primary-color">Special Service</span> For your Business Development</h2>
            </div>
            
            <ul class="services-items-wrap">
                <li class="services-item">
                    <span class="services-item-number">01</span>
                    <div>
                        <p class="service-name heading-font">Web Application Development</p>
                        <p class="service-description">Building Scalable Web Applications</p>
                    </div>
                </li>
                <li class="services-item">
                    <span class="services-item-number">01</span>
                    <div>
                        <p class="service-name heading-font">Web Application Development</p>
                        <p class="service-description">Building Scalable Web Applications</p>
                    </div>
                </li>
                <li class="services-item">
                    <span class="services-item-number">01</span>
                    <div>
                        <p class="service-name heading-font">Web Application Development</p>
                        <p class="service-description">Building Scalable Web Applications</p>
                    </div>
                </li>
                <li class="services-item">
                    <span class="services-item-number">01</span>
                    <div>
                        <p class="service-name heading-font">Web Application Development</p>
                        <p class="service-description">Building Scalable Web Applications</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Services section end -->
    </section>
    
    <!-- Skills section start -->
    <section class="skills-section-container">
        <div class="secondary-bg-color has-border-rounded">
            <div class="container skills-section-wrap">
                <div class="skills-section-content">
                    <div class="skills-content-wrap">
                        <h4 class="subtitle heading-font">My Skills</h4>
                        <h2 class="title">Let’s Explore <span class="text-primary-color">Skills & Experience</span></h2>
                        <p class="content skills-sections-description">My main focus is web development, combining frontend expertise, UI/UX design, and SEO to craft dynamic and engaging web applications. I ensure each project is both visually appealing and optimized for performance and growth.</p>
                        <a href="<?php echo home_url(); ?>/about-us" class="primary-color-btn more-details-btn">More Details <span><i class="fa-solid fa-chevron-right"></i></span></a>
                    </div>
                    
                    <div class="right-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/skills-section-image.png" alt="Skills And Idea Image">
                    </div>
                </div>
                
                <div class="skills-items-wrap">
                    <div class="item">
                        <img src="http://localhost/developersajeeb/src/wp-content/uploads/2025/03/html-5.png" alt="Html">
                        <p>HTML5</p>
                    </div>
                    <div class="item">
                        <img src="http://localhost/developersajeeb/src/wp-content/uploads/2025/03/html-5.png" alt="Html">
                        <p>HTML5</p>
                    </div>
                    <div class="item">
                        <img src="http://localhost/developersajeeb/src/wp-content/uploads/2025/03/html-5.png" alt="Html">
                        <p>HTML5</p>
                    </div>
                    <div class="item">
                        <img src="http://localhost/developersajeeb/src/wp-content/uploads/2025/03/html-5.png" alt="Html">
                        <p>HTML5</p>
                    </div>
                    <div class="item">
                        <img src="http://localhost/developersajeeb/src/wp-content/uploads/2025/03/html-5.png" alt="Html">
                        <p>HTML5</p>
                    </div>
                    <div class="item">
                        <img src="http://localhost/developersajeeb/src/wp-content/uploads/2025/03/html-5.png" alt="Html">
                        <p>HTML5</p>
                    </div>
                </div>
            </div>
    
            <div class="bg-color"></div>
        </div>
    </section>
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