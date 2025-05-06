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

                <?php
                $tags = get_the_tags();
                if ($tags) {
                    echo '<p class="post-tags">Tags: ';
                    foreach ($tags as $tag) {
                        echo '<a href="' . get_tag_link($tag->term_id) . '">' . esc_html($tag->name) . '</a>, ';
                    }
                    echo '</p>';
                }
                ?>
            </div>

            <div class="blog-details-sidebar">
                <form role="search" method="get" class="blog-search-wrap" action="<?php echo home_url('/'); ?>">
                    <input type="search" placeholder="Search blog posts" name="s" id="blog-search-input"
                        value="<?php echo get_search_query(); ?>">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
        <div class="bg-color"></div>
    </section>
</main>
<?php
get_footer();
?>