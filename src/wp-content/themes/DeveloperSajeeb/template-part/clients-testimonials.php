<section class="testimonials-section-container">
    <div class="secondary-bg-color has-border-rounded testimonials-bg-color">
        <div class="container testimonials-section-wrap">
            <div class="side-content">
                <h4 class="subtitle heading-font">Clients Testimonials</h4>
                <h2 class="title">I’ve received <span class="text-primary-color">Glowing Reviews</span> from my clients!
                </h2>
                <p class="content side-sections-description">I consistently deliver high-quality work and maintain
                    strong client satisfaction, turning their visions into reality.</p>

                <div class="swiper-button-wrap">
                    <button class="swiper-button-prev"><i class="fa-solid fa-arrow-left"></i></button>
                    <button class="swiper-button-next"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>

            <div class="testimonials-slider">
                <div class="swiper TestimonialsSwiper">
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'testimonial',
                            'posts_per_page' => -1,
                        );
                        $query = new WP_Query($args);

                        while ($query->have_posts()) {
                            $query->the_post();
                            $client_title = get_field('client_title', get_the_ID());
                            ?>
                            <div class="swiper-slide testimonials-card">
                                <div class="client-image">
                                    <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                </div>
                                <p><?php echo get_the_content(); ?></p>
                                <h4 class="client-name"><?php the_title(); ?></h4>
                                <?php if(!empty($client_title)) : ?>
                                <span class="client-title heading-font"><?php echo esc_attr($client_title); ?></span>
                                <?php endif; ?>
                            </div>
                        <?php }
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>