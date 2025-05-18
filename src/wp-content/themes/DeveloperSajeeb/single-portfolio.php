<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <main class="portfolio-details-container">

            <?php if (has_post_thumbnail()): ?>
                <div class="portfolio-thumbnail container">
                    <a class="expand-button" href="<?php echo get_the_post_thumbnail_url(); ?>" data-fancybox="portfolio-thumbnail">
                        <span><i class="fa-solid fa-expand"></i></span>
                    </a>

                    <?php
                    $portfolio_logo = get_field('project_logo');
                    if (!empty($portfolio_logo)):
                        ?>
                        <img class="project-logo" src="<?php echo esc_attr($portfolio_logo['url']); ?>"
                            alt="<?php echo esc_attr($portfolio_logo['alt']); ?>">
                    <?php endif; ?>

                    <?php the_post_thumbnail('large'); ?>

                    <div class="portfolio-title-wrap">
                        <h1><?php the_title(); ?></h1>

                        <div class="category">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'portfolio_category');
                            if ($terms && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    echo '<span>' . esc_html($term->name) . '</span> ';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <section class="container portfolio-content">
                <div class="portfolio-content-wrap">
                    <div class="portfolio-description">
                        <?php the_content(); ?>
                    </div>

                    <?php
                    $out_links = get_field('out_links');
                    $live_link = $out_links['live_link'] ?? '';
                    $dribbble = $out_links['dribbble'] ?? '';
                    $github = $out_links['github'] ?? '';
                    $client_side = $out_links['client_side'] ?? '';
                    $server_side = $out_links['server_side'] ?? '';
                    $github_links = $out_links['github_links'] ?? [];
                    
                    if (!empty($out_links)): ?>
                        <div class="out-links">
                            <?php if (!empty($live_link)): ?>
                                <a class="live-btn" href="<?php echo esc_url($live_link); ?>" target="_blank">Go Live</a>
                            <?php endif; ?>

                            <?php if (!empty($dribbble)): ?>
                                <a class="dribbble-btn" href="<?php echo esc_url($dribbble); ?>" target="_blank">Dribbble</a>
                            <?php endif; ?>

                            <?php if (in_array('Github', $github_links) && !empty($github)): ?>
                                <a class="github-btn" href="<?php echo esc_url($github); ?>" target="_blank">GitHub</a>
                            <?php endif; ?>

                            <?php if (in_array('Client Side', $github_links) && !empty($client_side)): ?>
                                <a class="github-btn" href="<?php echo esc_url($client_side); ?>" target="_blank">GitHub Client Side</a>
                            <?php endif; ?>

                            <?php if (in_array('Server Side', $github_links) && !empty($server_side)): ?>
                                <a class="github-btn" href="<?php echo esc_url($server_side); ?>" target="_blank">GitHub Server Side</a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    $project_video_thumbnail = get_field('project_video_thumbnail');
                    $project_video_url = get_field('project_video');
                    $project_images = get_field('project_screenshots');

                    if (!empty($project_video_thumbnail) || !empty($project_images)):
                        ?>
                        <div class="project-video">
                            <h2 class="title">Inside the <span class="heading-font">Project</span></h2>

                            <?php if (!empty($project_video_thumbnail)): ?>
                                <div class="project-video-thumbnail">
                                    <img src="<?php echo esc_url($project_video_thumbnail['url']); ?>"
                                        alt="<?php echo esc_attr($project_video_thumbnail['alt']); ?>">
                                    <a href="<?php echo esc_url($project_video_url); ?>" class="video-play-button"
                                        data-fancybox="portfolio-thumbnail"><span></span></a>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php
                        if ($project_images):
                            ?>
                            <div class="project-images">
                                <?php foreach ($project_images as $image): ?>
                                    <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="portfolio-thumbnail">
                                        <img class="inner-img" src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>">

                                        <span><i class="fa-solid fa-up-right-and-down-left-from-center"></i></span>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                    <?php endif; ?>
                </div>

                <div class="right-sidebar">
                    <?php
                    $project_duration = get_field('project_duration');
                    $technology_or_tools = get_field('technology_or_tools');
                    $client = get_field('client');

                    if ($project_duration || $technology_or_tools || $client):
                        ?>
                        <ul class="project-info-items">
                            <?php if ($project_duration): ?>
                                <li>
                                    <p class="project-info-title heading-font">Project Duration</p>
                                    <p class="project-info-value"><?php echo esc_html($project_duration); ?></p>
                                </li>
                            <?php endif; ?>

                            <?php if ($technology_or_tools): ?>
                                <li>
                                    <p class="project-info-title heading-font">Technology And Tools</p>
                                    <p class="project-info-value"><?php echo esc_html($technology_or_tools); ?></p>
                                </li>
                            <?php endif; ?>

                            <?php if ($client): ?>
                                <li>
                                    <p class="project-info-title heading-font">Client</p>
                                    <p class="project-info-value"><?php echo esc_html($client); ?></p>
                                </li>
                            <?php endif; ?>
                        </ul>
                    <?php else: ?>
                        <div class="project-info">
                            <div class="project-info-items">
                                <p class="no-data-massage">No info available</p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="sidebar-cta">
                        <img class="sidebar-cta-bg" src="<?php echo get_template_directory_uri(); ?>/img/glop-black-bg.webp"
                            alt="">
                        <div class="cta-content">
                            <h3>Bring Your Vision to Life – Expert <span class="heading-font">Web Development</span> Awaits!
                            </h3>
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="secondary-gray-btn">Contact Now
                                <span><i class="fa-solid fa-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>