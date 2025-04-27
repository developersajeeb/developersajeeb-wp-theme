<?php
/*
 * This template is for displaying the header
 */
get_header();
?>
<main class="blog-page-container container">
    <section class="common-page-hero blog-heading">
        <div class="common-page-hero-title">
            <h1>Code, Create, Innovate</h1>
            <img src="<?php echo get_template_directory_uri() . '/img/leaf.png'; ?>" alt="icon">
        </div>
        <h2>Stay Updated with the Latest Trends, Tips, and Tutorials on Technology, Code, and Design</h2>
    </section>

    <section class="feature-section">
        <div class="feature-big-card">
            <img src="https://simplyeloped.com/wp-content/uploads/2024/11/What-to-Do-With-Engagement-Photos-ft-960x639.jpg"
                alt="">
            <div class="blog-item-meta">
                <p class="category">Web Design, React.js</p>
                <p class="blog-item-date heading-font"><span><i class="fa-regular fa-calendar-days"></i></span>April 27, 2025</p>
                <h5><a href="#">The Power of Responsive Web Design: Ensuring Mobile Compatibility</a></h5>

                <a href="#" class="read-more-btn">Read More <span><i class="fa-solid fa-link"></i></span></a>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>