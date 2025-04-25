<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <main class="portfolio-details-container">

            <?php if (has_post_thumbnail()): ?>
                <div class="portfolio-thumbnail container">
                    <a class="expand-button" href="<?php echo get_the_post_thumbnail_url(); ?>" data-fancybox="portfolio-thumbnail">
                        <span><i class="fa-solid fa-expand"></i></span>
                    </a>

                    <?php the_post_thumbnail('large'); ?>

                    <div class="portfolio-title-wrap">
                        <h1><?php the_title(); ?></h1>

                        <div class="category">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'portfolio_category');
                            if ($terms && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    echo '<span>' . esc_html($term->name) . '</span> ';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <section class="container portfolio-content">
                <div class="portfolio-description"><?php the_content(); ?></div>

                <div class="project-info">

                </div>
            </section>
        </main>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>