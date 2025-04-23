<div class="container cta-section-wrap">
    <div class="side-content">
        <h4 class="subtitle heading-font">Get In Touch</h4>
        <h2 class="title">Got a <span class="text-primary-color">Project</span> in Mind? Let’s Make It Happen!</h2>
        <p class="content side-sections-description">Ready to elevate your projects? Let’s discuss your ideas and
            collaborate to bring your vision to life!</p>

        <ul class="service-features-list">
            <li class="heading-font"><span><i class="fa-solid fa-check"></i></span>24/7 Super Support</li>
            <li class="heading-font"><span><i class="fa-solid fa-check"></i></span>Unlimited Revisions</li>
            <li class="heading-font"><span><i class="fa-solid fa-check"></i></span>High-Quality Work</li>
            <li class="heading-font"><span><i class="fa-solid fa-check"></i></span>Client-Centric Approach</li>
            <li class="heading-font"><span><i class="fa-solid fa-check"></i></span>Fast & Reliable Communication
            </li>
        </ul>
    </div>

    <div class="contact-form-wrap">
        <?php
        $contact_form_shortcode = get_option('contact_form_shortcode');
        if ($contact_form_shortcode) {
            echo do_shortcode($contact_form_shortcode);
        } else {
            echo "<p>Please set the contact form shortcode in Theme Options.</p>";
        }
        ?>
    </div>
</div>