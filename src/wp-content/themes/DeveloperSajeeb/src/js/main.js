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
document.addEventListener("DOMContentLoaded", function() {
    const faqs = document.querySelectorAll('.faq');

    faqs.forEach(faq => {
        const summary = faq.querySelector('summary');
        const answer = faq.querySelector('.answer');
        const toggleIcon = summary.querySelector('.toggle-icon');

        // Initially hide answers with max-height set to 0
        answer.style.maxHeight = '0';
        answer.style.overflow = 'hidden';
        answer.style.transition = 'max-height 0.3s ease-out';

        summary.addEventListener('click', function() {
            if (answer.style.maxHeight === '0px') {
                // Slide down the answer
                answer.style.maxHeight = answer.scrollHeight + 'px'; // Dynamically set to full content height
                toggleIcon.innerHTML = '<i class="fa-solid fa-minus"></i>';
            } else {
                // Slide up the answer
                answer.style.maxHeight = '0'; // Collapse the answer
                toggleIcon.innerHTML = '<i class="fa-solid fa-plus"></i>';
            }
        });
    });
});