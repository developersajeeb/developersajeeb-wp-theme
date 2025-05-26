<?php get_header(); ?>
<main class="default-page-container">
    <section class="container common-page-hero">
        <div class="common-page-hero-title">
            <h1><?php the_title(); ?></h1>
            <img src="<?php echo get_template_directory_uri() . '/img/leaf.png'; ?>" alt="icon">
        </div>
    </section>

    <section class="body-content container">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>