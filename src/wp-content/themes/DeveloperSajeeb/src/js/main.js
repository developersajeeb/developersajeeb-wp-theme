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
// document.addEventListener('DOMContentLoaded', function() {
//     const items = document.querySelectorAll('.faq button'); // Select all FAQ buttons

//     function toggleAccordion() {
//       const itemToggle = this.getAttribute('aria-expanded'); // Get the current aria-expanded state
//       const faq = this.closest('.faq'); // Get the closest FAQ item
//       const answer = faq.querySelector('.answer'); // Get the corresponding answer div
//       const icon = this.querySelector('.toggle-icon i'); // Get the icon element

//       // Collapse all accordion items first
//       document.querySelectorAll('.faq').forEach(function(faq) {
//         const currentAnswer = faq.querySelector('.answer');
//         currentAnswer.style.maxHeight = null; // Close all answers
//         currentAnswer.style.padding = "0px 30px"; // Reset padding to collapsed state
//         currentAnswer.style.opacity = "0"; // Set opacity to 0 for fading out
//         faq.querySelector('button').setAttribute('aria-expanded', 'false'); // Set aria-expanded to false

//         // Only manipulate the icon if it exists
//         const toggleIcon = faq.querySelector('.toggle-icon i');
//         if (toggleIcon) {
//           toggleIcon.classList.remove('fa-minus'); // Reset icon
//           toggleIcon.classList.add('fa-plus'); // Reset icon
//         }
//       });

//       // If the clicked item was collapsed, expand it
//       if (itemToggle === 'false') {
//         this.setAttribute('aria-expanded', 'true');
//         answer.style.maxHeight = "1000px"; // Expand answer
//         answer.style.padding = "8px 30px 30px 30px"; // Set padding for expanded state
//         answer.style.opacity = "1"; // Set opacity to 1 for fade-in effect
//         answer.style.transition = "max-height 0.5s ease, padding 0.5s ease, opacity 0.5s ease"; // Add transition for smooth animation

//         // Only manipulate the icon if it exists
//         if (icon) {
//           icon.classList.remove('fa-plus');
//           icon.classList.add('fa-minus');
//         }
//       }
//     }

//     // Add event listener for each FAQ button to toggle the accordion on click
//     items.forEach((item) => item.addEventListener('click', toggleAccordion));
// });

document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.answer-button');

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

