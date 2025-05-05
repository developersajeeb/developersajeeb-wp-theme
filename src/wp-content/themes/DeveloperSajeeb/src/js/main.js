// Initialize a new Lenis instance for smooth scrolling
const lenis = new Lenis();
// Synchronize Lenis scrolling with GSAP's ScrollTrigger plugin
lenis.on('scroll', ScrollTrigger.update);
gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
});
// Disable lag smoothing in GSAP to prevent any delay in scroll animations
gsap.ticker.lagSmoothing(0);


// Lets Talk Sidebar
document.addEventListener("DOMContentLoaded", function () {
    const letsTalkToggle = document.querySelector(".lets-talk-hamburger");
    const letsNav = document.querySelector(".lets-talk-aside");
    const letsOverly = document.querySelector(".lets-talk-aside-overly");
    const sidebarClose = document.querySelectorAll(".sidebar-menu-close");

    letsTalkToggle.addEventListener("click", function (e) {
        e.stopPropagation();
        letsNav.classList.toggle("lets-talk-aside-active");
        letsOverly.classList.toggle("active");
    });

    document.addEventListener("click", function (e) {
        if (
            !letsNav.contains(e.target) &&
            !letsTalkToggle.contains(e.target)
        ) {
            letsNav.classList.remove("lets-talk-aside-active");
            letsOverly.classList.remove("active");
        }
    });

    letsOverly.addEventListener("click", function () {
        letsNav.classList.remove("lets-talk-aside-active");
        letsOverly.classList.remove("active");
    });

    sidebarClose.forEach(function (closeIcon) {
        closeIcon.addEventListener("click", function () {
            letsNav.classList.remove("lets-talk-aside-active");
            letsOverly.classList.remove("active");
        });
    });
});

// Sticky Navbar
const navbar = document.querySelector('.top-navbar-container');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('menu-sticky');
    } else {
        navbar.classList.remove('menu-sticky');
    }
});

// Testimonials Swiper Slider
document.addEventListener("DOMContentLoaded", () => {
    new Swiper(".TestimonialsSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
        }
    });
});

// Client logo Swiper Slider
document.addEventListener("DOMContentLoaded", () => {
    new Swiper(".ClintLogoSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3200,
            disableOnInteraction: true,
        },
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
        breakpoints: {
            360: {
                slidesPerView: 2,
                spaceBetween: 20,
            },

            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },

            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },

            1024: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
        }
    });
});

// Page bottom to top button with animation
document.addEventListener("DOMContentLoaded", function () {
    const backToTopBtn = document.querySelector(".back-to-top");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 200) {
            backToTopBtn.classList.add("show");
            backToTopBtn.classList.remove("hide");
        } else {
            backToTopBtn.classList.add("hide");
            backToTopBtn.classList.remove("show");
        }
    });

    backToTopBtn.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});

// Portfolio Filter
document.addEventListener("DOMContentLoaded", function () {
    const filters = document.querySelectorAll(".filter");
    const portfolioItems = document.querySelectorAll(".portfolio-item");

    filters.forEach(filter => {
        filter.addEventListener("click", function () {
            let filterValue = this.getAttribute("data-filter");

            filters.forEach(f => f.classList.remove("active"));
            this.classList.add("active");

            portfolioItems.forEach(item => {
                if (filterValue === "all" || item.classList.contains(filterValue)) {
                    item.classList.remove("hide");
                    item.classList.add("show");
                } else {
                    item.classList.remove("show");
                    item.classList.add("hide");
                }
            });
        });
    });
});

// FAQ Toggle
document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.answer-button');
    if (items.length === 0) return;

    // Always open the first item by default
    const firstFaq = document.querySelector('.faq');
    firstFaq.setAttribute('aria-expanded', 'true');
    firstFaq.querySelector('.answer-button').setAttribute('aria-expanded', 'true');
    firstFaq.querySelector('.toggle-icon').innerHTML = '<i class="fa-solid fa-minus"></i>';

    function toggleAccordion() {
        const faqContainer = this.closest('.faq');
        const itemToggle = this.getAttribute('aria-expanded');
        const toggleIcon = this.querySelector('.toggle-icon');

        // Close all sections first
        document.querySelectorAll('.faq').forEach((item) => {
            item.setAttribute('aria-expanded', 'false');
            item.querySelector('.answer-button').setAttribute('aria-expanded', 'false');
            item.querySelector('.toggle-icon').innerHTML = '<i class="fa-solid fa-plus"></i>';
        });

        // Toggle the clicked section
        if (itemToggle === 'false') {
            faqContainer.setAttribute('aria-expanded', 'true');
            this.setAttribute('aria-expanded', 'true');
            toggleIcon.innerHTML = '<i class="fa-solid fa-minus"></i>';
        }
    }

    items.forEach((item) => item.addEventListener('click', toggleAccordion));
});

// Fancybox Config
document.addEventListener("DOMContentLoaded", function () {
    Fancybox.bind('[data-fancybox="portfolio-thumbnail"]', {
        buttons: [
            "zoom",
            "fullScreen", ,
            "close"
        ],
        loop: false,
        protect: true
    });

});

// Blog Ajax Request
document.addEventListener("DOMContentLoaded", function () {
    let page = 2;

    const btnContainers = document.querySelectorAll('.loading-btn');
    const noMorePosts = document.querySelectorAll('.no-more-blog-posts');

    btnContainers.forEach((btnContainer, index) => {
        const btn = btnContainer.querySelector('.load-more-btn');
        const loader = btnContainer.querySelector('.blog-loader');
        const taxonomy = btnContainer.dataset.taxonomy;
        const term_id = btnContainer.dataset.termId;

        btn.addEventListener('click', function () {
            btn.style.display = 'none';
            loader.style.display = 'inline-block';

            const data = new FormData();
            data.append('action', 'load_more_posts');
            data.append('page', page);
            data.append('taxonomy', taxonomy);
            data.append('term_id', term_id);

            fetch(blog_ajax_object.ajax_url, {
                method: 'POST',
                body: data
            })
                .then(res => res.text())
                .then(response => {
                    const trimmedData = response.trim();

                    if (trimmedData === 'no_more') {
                        noMorePosts[index].style.display = 'block';
                        btnContainer.style.display = 'none';
                    } else {
                        document.getElementById('blog-posts-container')
                            .insertAdjacentHTML('beforeend', trimmedData);

                        page++;
                        btn.style.display = 'inline-block';
                        loader.style.display = 'none';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    btn.style.display = 'inline-block';
                    loader.style.display = 'none';
                });
        });
    });
});