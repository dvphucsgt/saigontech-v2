/**
 * SGTech - Main JavaScript
 * Vanilla JS functionality for the static HTML version
 */

// Initialize all components
document.addEventListener('DOMContentLoaded', function () {
    initMobileMenu();
    initAnimatedCounters();
    initSmoothScroll();
    initFormValidation();
    initScrollAnimations();
    initHeaderScroll();
    initBlogAjax();
});

/**
 * AJAX Blog Filtering & Search
 */
function initBlogAjax() {
    const wrapper = document.getElementById('blog-ajax-content-wrapper');
    const searchForm = document.getElementById('blog-search-form');
    if (!wrapper) return;

    // Handle Category Filter Clicks
    document.addEventListener('click', function (e) {
        const catBtn = e.target.closest('.sgtech-v2-cat-btn');
        if (catBtn) {
            e.preventDefault();
            const url = catBtn.getAttribute('href');
            loadBlogContent(url);
        }

        // Handle Pagination Clicks (since they are dynamic)
        const pageLink = e.target.closest('.sgtech-v2-ajax-link');
        if (pageLink) {
            e.preventDefault();
            const url = pageLink.getAttribute('href');
            loadBlogContent(url);
        }
    });

    // Handle Search Form Submission
    if (searchForm) {
        searchForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(this);
            const params = new URLSearchParams(formData);
            const url = this.getAttribute('action') + '?' + params.toString();
            loadBlogContent(url);
        });
    }

    // Handle Browser Back/Forward
    window.addEventListener('popstate', function () {
        loadBlogContent(window.location.href, false);
    });

    async function loadBlogContent(url, pushState = true) {
        const content = document.getElementById('blog-ajax-content');
        if (!content) return;

        // Start loading transition
        content.style.opacity = '0.5';
        content.style.pointerEvents = 'none';

        try {
            const response = await fetch(url);
            if (!response.ok) throw new Error('Network response was not ok');

            const html = await response.text();
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const newContent = doc.getElementById('blog-ajax-content');
            const newFilters = doc.querySelector('.sgtech-v2-sticky-filters .justify-content-center');

            if (newContent) {
                content.innerHTML = newContent.innerHTML;

                // Update filters (to reflect active state)
                const currentFilters = document.querySelector('.sgtech-v2-sticky-filters .justify-content-center');
                if (currentFilters && newFilters) {
                    currentFilters.innerHTML = newFilters.innerHTML;
                }

                // Update URL
                if (pushState) {
                    history.pushState(null, '', url);
                }

                // Success! Fade back in
                content.style.opacity = '1';
                content.style.pointerEvents = 'auto';

                // Re-initialize any logic if needed (e.g. animations)
                if (typeof initScrollAnimations === 'function') {
                    initScrollAnimations();
                }
            }
        } catch (error) {
            console.error('AJAX Load Error:', error);
            // Fallback: Reload page if AJAX fails
            if (pushState) window.location.href = url;
        }
    }
}

function initHeaderScroll() {
    const header = document.querySelector('.sgtech-v2-header');
    if (!header) return;

    window.addEventListener('scroll', function () {
        if (window.scrollY > 20) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // TOC Active State
    const tocLinks = document.querySelectorAll('.sgtech-v2-toc-link');
    const sections = document.querySelectorAll('h2[id]');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= sectionTop - 100) {
                current = section.getAttribute('id');
            }
        });

        tocLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current)) {
                link.classList.add('active');
            }
        });
    });
}

/**
 * Mobile Menu Toggle
 */
function initMobileMenu() {
    const toggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    const menuIcon = document.querySelector('.sgtech-v2-menu-icon');
    const closeIcon = document.querySelector('.sgtech-v2-close-icon');

    if (!toggler || !navbarCollapse) return;

    toggler.addEventListener('click', function () {
        navbarCollapse.classList.toggle('show');

        if (menuIcon && closeIcon) {
            const isOpen = navbarCollapse.classList.contains('show');
            menuIcon.style.display = isOpen ? 'none' : 'block';
            closeIcon.style.display = isOpen ? 'block' : 'none';
        }
    });

    // Close menu when clicking on a nav link
    const navLinks = navbarCollapse.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            navbarCollapse.classList.remove('show');
            if (menuIcon && closeIcon) {
                menuIcon.style.display = 'block';
                closeIcon.style.display = 'none';
            }
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', function (event) {
        if (!navbarCollapse.contains(event.target) && !toggler.contains(event.target)) {
            navbarCollapse.classList.remove('show');
            if (menuIcon && closeIcon) {
                menuIcon.style.display = 'block';
                closeIcon.style.display = 'none';
            }
        }
    });
}

/**
 * Animated Counters
 * Animates numbers when they come into view
 */
function initAnimatedCounters() {
    const counters = document.querySelectorAll('.sgtech-v2-counter');

    if (counters.length === 0) return;

    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-target'), 10);
                const suffix = counter.getAttribute('data-suffix') || '';
                const duration = parseInt(counter.getAttribute('data-duration'), 10) || 2500;

                animateCounter(counter, target, suffix, duration);
                observer.unobserve(counter);
            }
        });
    }, observerOptions);

    counters.forEach(counter => {
        observer.observe(counter);
    });
}

function animateCounter(element, target, suffix, duration) {
    const startTime = performance.now();
    const startValue = 0;

    function updateCounter(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);

        // Easing function (ease-out cubic)
        const easedProgress = 1 - Math.pow(1 - progress, 3);

        const currentValue = Math.floor(startValue + (target - startValue) * easedProgress);
        element.textContent = currentValue + suffix;

        if (progress < 1) {
            requestAnimationFrame(updateCounter);
        } else {
            element.textContent = target + suffix;
        }
    }

    requestAnimationFrame(updateCounter);
}

/**
 * Smooth Scroll for anchor links
 */
function initSmoothScroll() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');

    anchorLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            const href = this.getAttribute('href');

            if (href === '#') return;

            const target = document.querySelector(href);

            if (target) {
                e.preventDefault();
                const headerHeight = document.querySelector('.sgtech-v2-header')?.offsetHeight || 0;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

/**
 * Form Validation
 */
function initFormValidation() {
    const forms = document.querySelectorAll('.needs-validation');

    forms.forEach(form => {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                event.preventDefault();
                // Show success alert
                alert('Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi trong vòng 24 giờ làm việc.');
                form.reset();
                form.classList.remove('was-validated');
                return;
            }

            form.classList.add('was-validated');
        });
    });
}

/**
 * Toast Notification
 */
function showToast(title, message) {
    // Create toast container if it doesn't exist
    let toastContainer = document.querySelector('.sgtech-v2-toast-container');

    if (!toastContainer) {
        toastContainer = document.createElement('div');
        toastContainer.className = 'sgtech-v2-toast-container position-fixed bottom-0 end-0 p-3';
        toastContainer.style.zIndex = '1100';
        document.body.appendChild(toastContainer);
    }

    // Create toast element
    const toastId = 'toast-' + Date.now();
    const toastHTML = `
    <div id="${toastId}" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <i class="bi bi-check-circle-fill text-success me-2"></i>
        <strong class="me-auto">${title}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        ${message}
      </div>
    </div>
  `;

    toastContainer.insertAdjacentHTML('beforeend', toastHTML);

    const toastElement = document.getElementById(toastId);
    const toast = new bootstrap.Toast(toastElement, { autohide: true, delay: 5000 });
    toast.show();

    // Remove toast element after it's hidden
    toastElement.addEventListener('hidden.bs.toast', function () {
        toastElement.remove();
    });
}

/**
 * Scroll Animations
 * Fade in elements when they come into view
 */
function initScrollAnimations() {
    const animatedElements = document.querySelectorAll('.sgtech-v2-animate-on-scroll');

    if (animatedElements.length === 0) return;

    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('sgtech-v2-animate-fadeInUp');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    animatedElements.forEach(element => {
        element.style.opacity = '0';
        observer.observe(element);
    });
}
