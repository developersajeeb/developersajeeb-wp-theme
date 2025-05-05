<?php

// Load more posts
add_action('wp_ajax_load_more_posts', 'load_more_posts_callback');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts_callback');

function load_more_posts_callback() {
    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $taxonomy = isset($_POST['taxonomy']) ? sanitize_text_field($_POST['taxonomy']) : '';
    $term_id = isset($_POST['term_id']) ? intval($_POST['term_id']) : 0;

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 12,
        'paged' => $paged,
    );

    if ($taxonomy && $term_id) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => $taxonomy,
                'field' => 'term_id',
                'terms' => $term_id,
            ),
        );
    }

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
        echo 'no_more';
    endif;

    wp_reset_postdata();
    wp_die();
}

function blog_enqueue_scripts() {
    wp_localize_script('devsajeeb-scripts', 'devsajeeb_ajax_obj', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'blog_enqueue_scripts');
