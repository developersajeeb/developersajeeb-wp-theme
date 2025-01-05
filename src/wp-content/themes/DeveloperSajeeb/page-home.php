<?php
/*
 * Template Name: Front Page
 */
get_header();

$frontpage_id = get_option('page_on_front');

// echo "<pre>";
// print_r($works_query->posts);
// echo "</pre>";
?>

<main>
    <section class="hero-bg">
        <div class="hero-section-container">
            <div class="intro-text">
                <h3 class="heading-font">Hello, i’m</h2>
                <h2>Sajeeb Debnath</h1>
                <h1>Web Developer</h3>
                <p>Designing and Developing Interactive Web Platforms That Reflect Your Brand’s Identity and Achieve Your Goals!</p>
                <a href="/contact" class="primary-color-btn">Hire Me <span><i class="fa-solid fa-chevron-right"></i></span></a>
            </div>

            <div class="middle-image">
                <img src="http://localhost/developersajeeb/src/wp-content/uploads/2025/01/Sajeeb-Debnath-home.webp" alt="Developer Sajeeb">
            </div>

            <div class="hero-right-content">
                <div class="right-content-wrap">
                    <h3>4+</h3>
                    <p>Years Of Experience</p>
                    <h3>110+</h3>
                    <p>Project Complete</p>
                    <h3>99%</h3>
                    <p>Client Satisfactions</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>