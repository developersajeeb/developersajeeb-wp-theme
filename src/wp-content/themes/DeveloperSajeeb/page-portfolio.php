<?php
/*
 * Template Name: Portfolio Page
 */
get_header();
?>

<main class="portfolio-page-container">
    <section class="container common-page-hero">
        <div class="common-page-hero-title">
            <h1>My Portfolio</h1>
            <img src="<?php echo get_template_directory_uri() . '/img/leaf.png'; ?>" alt="icon">
        </div>
        <h2 class="heading-font">Dream . Develop . Deliver</h2>
    </section>

    <section class="portfolio-cards-container">
        <?php set_query_var('portfolio_posts_count', -1);
        get_template_part('template-part/portfolio-cards'); ?>
    </section>
</main>

<?php
get_footer();
?>