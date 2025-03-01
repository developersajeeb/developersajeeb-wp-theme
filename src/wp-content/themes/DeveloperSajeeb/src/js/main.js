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