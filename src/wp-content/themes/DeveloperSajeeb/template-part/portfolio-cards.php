<?php
$portfolio_posts_count = get_query_var('portfolio_posts_count', -1);
?>

<div class="container">
    <?php if (!is_front_page()): ?>
        <ul class="portfolios-category">
            <li class="filter active" data-filter="all">All</li>
            <?php
            $categories = get_terms('portfolio_category');
            foreach ($categories as $category) {
                echo '<li class="filter" data-filter="' . $category->slug . '">' . $category->name . '</li>';
            }
            ?>
        </ul>
    <?php endif; ?>

    <div class="portfolio-items-wrap">
        <?php
        $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => $portfolio_posts_count,
        );
        $query = new WP_Query($args);

        while ($query->have_posts()) {
            $query->the_post();
            $categories = get_the_terms(get_the_ID(), 'portfolio_category');
            $category_classes = '';
            if ($categories) {
                foreach ($categories as $category) {
                    $category_classes .= ' ' . $category->slug;
                }
            }
            $portfolio_logo = get_field('project_logo', get_the_ID());
            ?>
            <div class="portfolio-item<?php echo $category_classes; ?>">
                <div class="portfolio-thumbnail">
                    <span class="portfolio-thumbnail-overly">
                        <?php if (!empty($portfolio_logo)): ?>
                            <img class="overly-logo" src="<?php echo esc_attr($portfolio_logo['url']); ?>"
                                alt="<?php echo esc_attr($portfolio_logo['alt']); ?>">
                        <?php endif; ?>
                    </span>
                    <img class="thumbnail-img" src="<?php echo get_the_post_thumbnail_url(); ?>"
                        alt="<?php the_title(); ?>">
                </div>
                <div class="portfolio-shot-details">
                    <p class="category">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'portfolio_category');
                        if ($terms && !is_wp_error($terms)) {
                            $term_names = wp_list_pluck($terms, 'name');
                            echo implode(', ', $term_names);
                        }
                        ?>
                    </p>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

                    <a href="<?php the_permalink(); ?>" class="details-btn"><i
                            class="fa-solid fa-arrows-turn-right"></i></a>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
        ?>
    </div>
</div>