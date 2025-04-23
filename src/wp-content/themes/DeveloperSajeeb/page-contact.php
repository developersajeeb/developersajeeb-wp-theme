<?php
/*
 * Template Name: Contact Page
 */
get_header();
?>
<main class="contact-page-container">
    <section class="container common-page-hero">
        <div class="common-page-hero-title">
            <h1>Connect & Collaborate</h1>
            <img src="<?php echo get_template_directory_uri() . '/img/leaf.png'; ?>" alt="icon">
        </div>
        <h2 class="heading-font">Just a message away</h2>
    </section>

    <!-- Contact Form Section Start -->
    <section class="contact-form-section">
        <?php get_template_part('template-part/need-service-form'); ?>
    </section>
    <!-- Contact Form Section End -->
</main>
<?php
get_footer();
?>