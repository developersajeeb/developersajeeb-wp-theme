<?php
get_header();
?>
<main>
    <section class="search-blog-section-container container">
        <section class="secondary-bg-color has-border-rounded common-page-hero search-page-hero">
            <div class="common-page-hero-title">
                <h1>Search Results for '<?php echo get_search_query(); ?>'</h1>
            </div>
        </section>
    </section>

    <section class="blog-card-section-container">
        <div class="blog-card-section-wrap container">
            <div class="blog-cards" id="blog-posts-container">
                <?php
                $paged = 1;
                $posts_per_page = 12;

                $term_id = get_queried_object_id();
                $taxonomy = is_category() ? 'category' : (is_tag() ? 'post_tag' : '');

                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => $posts_per_page,
                    'paged'          => $paged,
                    's'              => get_search_query(),
                );

                $query = new WP_Query($args);

                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
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
                                <p class="blog-item-date heading-font"><span><i class="fa-regular fa-calendar-days"></i></span>
                                    <?php the_time('F j, Y'); ?></p>
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

                                <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More <span><i
                                            class="fa-solid fa-link"></i></span></a>
                            </div>
                        </div>
                        <?php
                    endwhile;
                else:
                    echo '<p class="no-more-blog-posts">No Posts Found</p>';
                endif;

                // Reset Post Data
                wp_reset_postdata();
                ?>
            </div>

            <?php if ($query->max_num_pages > 1): ?>
                <div class="loading-btn" data-taxonomy="<?php echo esc_attr($taxonomy); ?>"
                    data-term-id="<?php echo esc_attr($term_id); ?>">
                    <button class="primary-color-btn load-more-btn">Load More</button>
                    <div class="blog-load-more-btn-loader blog-loader" style="display:none;"></div>
                </div>
                <p class="no-more-blog-posts" style="display:none;">No more blog here.</p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php
get_footer();
?>