<?php
get_header();
?>
<main>
    <section class="container blog-details-heading">
        <div class="bg-color"></div>
        <h1><?php the_title(); ?></h1>

        <div class="blog-meta">
            <div class="blog-details-ctg">
                <?php the_category(' '); ?>
            </div>
        </div>
    </section>

    <section class="blog-details-main-container">
        <div class="container blog-details-wrapper">
            <div class="blog-details-content">
                <?php
                if (has_post_thumbnail()) {
                    $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $thumb_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                    ?>
                    <img class="post-thumbnail" src="<?php echo esc_url($thumb_url); ?>"
                        alt="<?php echo esc_attr($thumb_alt ? $thumb_alt : get_the_title()); ?>">
                    <?php
                }
                ?>

                <p class="blog-publish-date"><span><i class="fa-regular fa-calendar"></i></span>
                    <?php echo get_the_date(); ?></p>

                <div class="body-content">
                    <?php the_content(); ?>
                </div>

                <div class="content-bottom-action">
                    <?php
                    $tags = get_the_tags();
                    if ($tags) {
                        echo '<p class="post-tags"><span class="heading-font">Tags: </span>';
                        foreach ($tags as $tag) {
                            echo '<a href="' . get_tag_link($tag->term_id) . '">' . esc_html($tag->name) . '</a>';
                        }
                        echo '</p>';
                    }
                    ?>

                    <?php
                    $post_url = urlencode(get_permalink());
                    $post_title = urlencode(get_the_title());
                    ?>
                    <div class="social-share">
                        <p class="heading-font">Share: </p>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" target="_blank"
                            rel="noopener" aria-label="Share on Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>"
                            target="_blank" rel="noopener" aria-label="Share on Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $post_url; ?>&title=<?php echo $post_title; ?>"
                            target="_blank" rel="noopener" aria-label="Share on LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://pinterest.com/pin/create/button/?url=<?php echo $post_url; ?>&description=<?php echo $post_title; ?>"
                            target="_blank" rel="noopener" aria-label="Share on Pinterest">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>

                <?php
                $current_post_id = get_the_ID();
                $categories = get_the_category();

                if ($categories) {
                    $category_ids = array_map(function ($cat) {
                        return $cat->term_id;
                    }, $categories);

                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'post__not_in' => array($current_post_id),
                        'category__in' => $category_ids,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                    $related_posts = new WP_Query($args);

                    if ($related_posts->have_posts()): ?>
                        <div class="related-posts">
                            <h3 class="title">Related Posts</h3>
                            <div class="related-posts-wrapper">
                                <?php while ($related_posts->have_posts()):
                                    $related_posts->the_post(); ?>
                                    <div class="blog-item">
                                        <div class="blog-thumb">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('medium'); ?>
                                            <?php else: ?>
                                                <div class="img-fluid">
                                                    <img src="<?php echo get_theme_mod('devsajeeb_logo'); ?>"
                                                        alt="No image placeholder">
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="blog-item-content">
                                            <p class="category"><?php echo get_the_category_list(', '); ?></p>
                                            <p class="blog-item-date heading-font">
                                                <span><i class="fa-regular fa-calendar-days"></i></span>
                                                <?php the_time('F j, Y'); ?>
                                            </p>
                                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

                                            <a href="<?php the_permalink(); ?>" class="read-more-btn">
                                                Read More <span><i class="fa-solid fa-link"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <?php wp_reset_postdata(); endif;
                }
                ?>

            </div>

            <div class="blog-details-sidebar">
                <form role="search" method="get" class="blog-search-wrap" action="<?php echo home_url('/'); ?>">
                    <input type="search" placeholder="Search blog posts" name="s" id="blog-search-input"
                        value="<?php echo get_search_query(); ?>">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <div class="ads-banner">
                    <a href="https://developersajeeb.com/"><img src="http://localhost/developersajeeb/src/wp-content/uploads/2025/05/sajeeb-debnath.jpg" alt="developersajeeb"></a>
                </div>

                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );

                $recent_posts = new WP_Query($args);

                if ($recent_posts->have_posts()): ?>
                    <div class="recent-posts">
                        <h3 class="heading-font">Recent Posts</h3>

                        <?php while ($recent_posts->have_posts()):
                            $recent_posts->the_post(); ?>
                            <div class="recent-item">
                                <div class="post-thumb">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else: ?>
                                        <div class="img-fluid">
                                            <img src="<?php echo get_theme_mod('devsajeeb_logo'); ?>" alt="No image placeholder">
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="recent-item-content">
                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

                                    <a href="<?php the_permalink(); ?>" class="read-more-btn">
                                        Read More <span><i class="fa-solid fa-link"></i></span>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); endif; ?>
            </div>
        </div>
        <div class="bg-color"></div>
    </section>
</main>
<?php
get_footer();
?>