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
    <!-- Hero Banner section start -->
    <section class="hero-bg line-bg">
        <div class="hero-section-container">
            <div class="intro-text">
                <h3 class="heading-font">Hello, i’m</h2>
                <h2>Sajeeb Debnath</h1>
                <h1>Web Developer</h3>
                <p class="content">Designing and Developing Interactive Web Platforms That Reflect Your Brand’s Identity and Achieve Your Goals!</p>
                <a href="<?php echo home_url(); ?>/contact" class="primary-color-btn">Hire Me <span><i class="fa-solid fa-chevron-right"></i></span></a>
            </div>

            <div class="middle-image">
                <img src="http://localhost/developersajeeb/src/wp-content/uploads/2025/01/Sajeeb-Debnath-home.webp" alt="Developer Sajeeb">
            </div>

            <div class="hero-right-content">
                <div class="right-content-wrap">
                    <h3>4+</h3>
                    <p class="heading-font">Years Of Experience</p>
                    <h3>110+</h3>
                    <p class="heading-font">Project Complete</p>
                    <h3>99%</h3>
                    <p class="heading-font">Client Satisfactions</p>
                </div>
            </div>
        </div>
        <div class="responsive-image">
            <div class="responsive-image-wrap">
                <img src="http://localhost/developersajeeb/src/wp-content/uploads/2025/01/Sajeeb-Debnath-home.webp" alt="Developer Sajeeb">
            </div>
        </div>
    </section>
    <!-- Hero Banner section end -->
    
    <!-- About Us section end -->
    <section class="secondary-bg-color">
        <div class="container about-us-container">

            <div class="about-us-content">
                <h4 class="subtitle heading-font">About Me</h4>
                <h2 class="title">Professional Solutions for <span class="text-primary-color">Complex Digital</span> Product Challenges</h2>
                <p class="content about-us-description">As an experienced web developer, I specialize in frontend technologies like HTML, CSS, SCSS, Tailwind, Bootstrap, and Material UI, and I am skilled in React.js, TypeScropt, Next.js, Node.js, Express, MongoDB, and also WordPress. I also have a solid understanding of SEO and expertise in UI design, where I combine aesthetic precision with functionality to craft engaging user experiences.</p>

                <ul class="skills-category">
                    <li><span class="list-icon"><i class="fa-solid fa-check"></i></span> <span class="list-text heading-font">Web Design</span></li>
                    <li><span class="list-icon"><i class="fa-solid fa-check"></i></span> <span class="list-text heading-font">Web Development</span></li>
                    <li><span class="list-icon"><i class="fa-solid fa-check"></i></span> <span class="list-text heading-font">Ui/UX Design</span></li>
                    <li><span class="list-icon"><i class="fa-solid fa-check"></i></span> <span class="list-text heading-font">SEO</span></li>
                </ul>

            </div>
            <img class="glob-img-for-bg" src="<?php echo get_template_directory_uri(); ?>/img/global-shape.svg" alt="Global Image">
    
            <div class="about-us-images">
                <img class="glob-img" src="<?php echo get_template_directory_uri(); ?>/img/global-shape.svg" alt="Global Image">
            </div>
        </div>
    </section>
    <!-- About Us section end -->

    <!-- Work Experience section start -->
     <section class="line-bg">
        <div class="container experience-section-wrap">
            <div class="icon-wrap">
                <div class="icon">
                    <i class="fa-solid fa-code"></i>
                </div>
            </div>

            <div class="experience-content">
                <h4 class="subtitle heading-font">My Resume</h4>
                <h2 class="title">Real <span class="text-primary-color">Solutions</span> for Web Challenges</h2>

                <div class="experience-wrap">
                    <div class="experience-card">
                        <span><i class="fa-solid fa-arrow-up-right-dots"></i></span>
                        <div>
                            <p>2023 - Present</p>
                            <h6>Jr. Web Developer</h6>
                            <p>CodersBucket</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- Work Experience section end -->

</main>

<?php
get_footer();
?>