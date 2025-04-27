<?php
/*
 * Template Name: Front Page
 */
get_header();
$frontpage_id = get_option('page_on_front');
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
                <?php if (!empty($call_text)): ?>
                    <h3 class="heading-font"><?php echo esc_attr($call_text) ?></h2><?php endif; ?>
                    <?php if (!empty($name)): ?>
                        <h2><?php echo esc_attr($name) ?></h2><?php endif; ?>
                    <?php if (!empty($title)): ?>
                        <h1><?php echo esc_attr($title) ?></h1><?php endif; ?>
                    <?php if (!empty($title)): ?>
                        <p class="content"><?php echo esc_attr($short_desc) ?></p><?php endif; ?>
                    <?php if ($hero_btn): ?>
                        <a class="primary-color-btn"
                            href="<?php echo !empty($hero_btn['url']) ? esc_url(home_url($hero_btn['url'])) : '#'; ?>"
                            target="<?php echo !empty($hero_btn['target']) ? esc_attr($hero_btn['target']) : '_self'; ?>">
                            <?php echo esc_attr($hero_btn['title']); ?>
                            <span><i class="fa-solid fa-chevron-right"></i></span>
                        </a>
                    <?php endif; ?>
            </div>

            <div class="middle-image">
                <?php if (!empty($hero_image)): ?>
                    <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>">
                <?php else: ?>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/no-image-placeholder.webp'); ?>"
                        alt="Default Image">
                <?php endif; ?>
            </div>

            <div class="hero-right-content">
                <div class="right-content-wrap">
                    <?php if (!empty($stats_numbers['years_of_experience'])): ?>
                        <h3><?php echo esc_attr($stats_numbers['years_of_experience']) ?>+</h3>
                        <p class="heading-font">Years Of Experience</p>
                    <?php endif; ?>

                    <?php if (!empty($stats_numbers['project_complete'])): ?>
                        <h3><?php echo esc_attr($stats_numbers['project_complete']) ?>+</h3>
                        <p class="heading-font">Project Complete</p>
                    <?php endif; ?>

                    <?php if (!empty($stats_numbers['client_satisfactions'])): ?>
                        <h3><?php echo esc_attr($stats_numbers['client_satisfactions']) ?>%</h3>
                        <p class="heading-font">Client Satisfactions</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="responsive-image">
            <div class="responsive-image-wrap">
                <img src="http://localhost/websites/src/wp-content/uploads/2025/03/Sajeeb-Debnath-home.png"
                    alt="Developer Sajeeb">
            </div>
        </div>
    </section>
    <!-- Hero Banner section end -->

    <!-- About Us section end -->
    <?php get_template_part('template-part/about-me'); ?>
    <!-- About Us section end -->

    <!-- Services section start -->
    <?php get_template_part('template-part/service-list'); ?>
    <!-- Services section end -->

    <!-- Skills section start -->
    <?php get_template_part('template-part/my-skills'); ?>
    <!-- Skills section end -->

    <!-- Portfolio section Start -->
    <section class="container portfolio-section-wrap">
        <div class="services-heading">
            <h4 class="subtitle heading-font">Latest Works</h4>
            <h2 class="title">Explore My Popular <span class="text-primary-color">Projects</span></h2>
        </div>

        <?php set_query_var('portfolio_posts_count', 4);
        get_template_part('template-part/portfolio-cards'); ?>

        <div class="portfolio-vew-btn">
            <a href="<?php echo home_url(); ?>/portfolio" class="primary-color-btn more-details-btn">View More Projects
                <span><i class="fa-solid fa-chevron-right"></i></span></a>
        </div>
    </section>
    <!-- Portfolio section End -->

    <!-- Clients Testimonials section Start -->
    <?php get_template_part('template-part/clients-testimonials'); ?>
    <!-- Clients Testimonials section End -->

    <!-- Contact Form Section Start -->
    <?php get_template_part('template-part/need-service-form'); ?>
    <!-- Contact Form Section End -->

    <!-- Blog Section Start -->
    <section class="blog-section-container">
        <div class="secondary-bg-color has-border-rounded">
            <div class="container blog-section-wrap">
                <div class="blog-heading">
                    <h4 class="subtitle heading-font">News & Blog</h4>
                    <h2 class="title">Latest News & <span class="text-primary-color">Blog</span></h2>
                </div>

                <!-- <div class="blog-items-wrap">

                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="https://wp.webtend.net/noxfolio/wp-content/uploads/2023/04/blog-09-min-768x417.jpg"
                                alt="Blog Image">
                        </div>

                        <div class="blog-item-content">
                            <p class="category">Divi, WooCommerce, WordPress, Yoast</p>
                            <p class="blog-item-date heading-font"><span><i
                                        class="fa-regular fa-calendar-days"></i></span> 17th May 2025</p>
                            <h5>A Beginner’s Guide to Running Adventures</h5>

                            <a href="<?php echo home_url(); ?>/blog" class="read-more-btn">Read More <span><i
                                        class="fa-solid fa-link"></i></span></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="https://wp.webtend.net/noxfolio/wp-content/uploads/2023/04/blog-09-min-768x417.jpg"
                                alt="Blog Image">
                        </div>

                        <div class="blog-item-content">
                            <p class="category">Divi, WooCommerce, WordPress, Yoast</p>
                            <p class="blog-item-date heading-font"><span><i
                                        class="fa-regular fa-calendar-days"></i></span> 17th May 2025</p>
                            <h5>A Beginner’s Guide to Running Adventures</h5>

                            <a href="<?php echo home_url(); ?>/blog" class="read-more-btn">Read More <span><i
                                        class="fa-solid fa-link"></i></span></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="https://wp.webtend.net/noxfolio/wp-content/uploads/2023/04/blog-09-min-768x417.jpg"
                                alt="Blog Image">
                        </div>

                        <div class="blog-item-content">
                            <p class="category">Divi, WooCommerce, WordPress, Yoast</p>
                            <p class="blog-item-date heading-font"><span><i
                                        class="fa-regular fa-calendar-days"></i></span> 17th May 2025</p>
                            <h5>A Beginner’s Guide to Running Adventures</h5>

                            <a href="<?php echo home_url(); ?>/blog" class="read-more-btn">Read More <span><i
                                        class="fa-solid fa-link"></i></span></a>
                        </div>
                    </div>
                </div> -->

                <div class="blog-items-wrap">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    );
                    $latest_posts = new WP_Query($args);

                    if ($latest_posts->have_posts()):
                        while ($latest_posts->have_posts()):
                            $latest_posts->the_post();
                            ?>
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <?php
                                    if (has_post_thumbnail()):
                                        the_post_thumbnail('medium');
                                    else:
                                        ?>
                                        <div class="img-fluid">
                                            <img src="<?php echo get_theme_mod('devsajeeb_logo'); ?>" alt="No image placeholder">
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="blog-item-content">
                                    <p class="category"><?php echo get_the_category_list(', '); ?></p>
                                    <p class="blog-item-date heading-font"><span><i class="fa-regular fa-calendar-days"></i></span> <?php the_time('F j, Y'); ?></p>
                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

                                    <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More <span><i
                                                class="fa-solid fa-link"></i></span></a>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    else:
                        echo '<p>No blog posts found.</p>';
                    endif;

                    // Reset Post Data
                    wp_reset_postdata();
                    ?>
                </div>

                <div class="blogs-more-btn-wrap">
                    <a href="<?php echo home_url(); ?>/blog" class="primary-color-btn more-blogs-btn">More Blogs
                        <span><i class="fa-solid fa-chevron-right"></i></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Client Logo Slider Section Start -->
    <?php get_template_part('template-part/client-logo-slider'); ?>
    <!-- Client Logo Slider Section End -->
</main>

<?php
get_footer();
?>