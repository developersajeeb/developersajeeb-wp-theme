<?php
/*
 * This template is for displaying the header
 */
get_header();
?>
<main class="blog-page-container">
    <section class="common-page-hero blog-heading container">
        <div class="common-page-hero-title">
            <h1>Tech Blog</h1>
            <img src="<?php echo get_template_directory_uri() . '/img/leaf.png'; ?>" alt="icon">
        </div>
        <h2>Stay Updated with the Latest Trends, Tips, and Tutorials on Technology, Code, and Design</h2>
    </section>


    <section class="feature-section container">
        <?php
        // Query for the first post (big card)
        $args1 = array(
            'posts_per_page' => 1,
            'post_status' => 'publish',
        );
        $first_post = new WP_Query($args1);

        if ($first_post->have_posts()):
            while ($first_post->have_posts()):
                $first_post->the_post();
                ?>

                <div class="feature-big-card blog-item">
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
                        <p class="category"><?php the_category(', '); ?></p>
                        <p class="blog-item-date heading-font"><span><i
                                    class="fa-regular fa-calendar-days"></i></span><?php the_time('F j, Y'); ?></p>
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <a href="<?php the_permalink(); ?>" class="secondary-gray-btn feature-read-more">Read More <span><i
                                    class="fa-solid fa-link"></i></span></a>
                    </div>
                </div>

                <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>

        <div class="feature-small-cards">
            <div class="feature-title">
                <h3><span class="heading-font">Featured</span> Posts</h3>
            </div>

            <?php
            // Query for the next two posts (small cards)
            $args2 = array(
                'posts_per_page' => 2,
                'post_status' => 'publish',
                'offset' => 1, // Skip the first post already displayed
            );
            $small_posts = new WP_Query($args2);

            if ($small_posts->have_posts()):
                while ($small_posts->have_posts()):
                    $small_posts->the_post();
                    ?>

                    <div class="blog-item feature-big-card feature-small-card">
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
                            <p class="category"><?php the_category(', '); ?></p>
                            <p class="blog-item-date heading-font"><span><i
                                        class="fa-regular fa-calendar-days"></i></span><?php the_time('F j, Y'); ?></p>
                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <a href="<?php the_permalink(); ?>" class="secondary-gray-btn feature-read-more">Read More <span><i
                                        class="fa-solid fa-link"></i></span></a>
                        </div>
                    </div>

                    <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>

    <section class="blog-card-section-container">
        <div class="blog-card-section-wrap container">
            <div class="blog-heading">
                <ul class="category-list">
                    <?php
                    $categories = get_categories();
                    if (!empty($categories)):
                        $first = true; // Variable to check if it's the first category
                        foreach ($categories as $category):
                            $class = ($first) ? 'class="selected"' : '';
                            $first = false; // After the first iteration, set to false
                            ?>
                            <li><a href="<?php echo get_category_link($category->term_id); ?>" <?php echo $class; ?>><?php echo $category->name; ?></a></li>
                            <?php
                        endforeach;
                    else:
                        echo '<li>No categories found.</li>';
                    endif;
                    ?>
                </ul>
                <form role="search" method="get" class="blog-search-wrap" action="<?php echo home_url('/'); ?>">
                    <input type="search" placeholder="Search blog posts" name="s" id="blog-search-input"
                        value="<?php echo get_search_query(); ?>">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

            <div class="blog-cards" id="blog-posts-container">
                <?php
                $args = array(
                    'posts_per_page' => 12,
                    'post_type' => 'post',
                );
                $latest_posts = new WP_Query($args);
                $total_posts = wp_count_posts()->publish;

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
                    echo '<p class="no-more-blog-posts">No blog posts found.</p>';
                endif;

                // Reset Post Data
                wp_reset_postdata();
                ?>
            </div>

            <?php if ($total_posts > 12): ?>
                <div class="loading-btn" data-taxonomy="" data-term-id="">
                    <button class="primary-color-btn load-more-btn">Load More</button>
                    <div class="blog-load-more-btn-loader blog-loader" style="display:none;"></div>
                </div>

                <p class="no-more-blog-posts" style="display:none;">No more blog here.</p>
            <?php endif; ?>

            <div class="mobile-bottom-side-ctg">
                <h4 class="heading-font">Categories</h4>

                <ul class="category-list">
                    <?php
                    $categories = get_categories();
                    if (!empty($categories)):
                        $first = true; // Variable to check if it's the first category
                        foreach ($categories as $category):
                            $class = ($first) ? 'class="selected"' : '';
                            $first = false; // After the first iteration, set to false
                            ?>
                            <li><a href="<?php echo get_category_link($category->term_id); ?>" <?php echo $class; ?>><?php echo $category->name; ?></a></li>
                            <?php
                        endforeach;
                    else:
                        echo '<li>No categories found.</li>';
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </section>

</main>
<?php
get_footer();
?>