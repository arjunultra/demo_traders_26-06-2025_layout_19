// index carousel swiper
document.addEventListener("DOMContentLoaded", () => {
    const homeCarouselSwiper = new Swiper(".home-carousel-swiper", {
      loop: true,
      speed: 600,
      effect: "creative",
      creativeEffect: {
        prev: {
          translate: ["-20%", 0, -1],
          opacity: 0.5,
          scale: 0.8,
        },
        next: {
          translate: ["20%", 0, -1],
          opacity: 0.5,
          scale: 0.8,
        },
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      // No pagination
      // No navigation
    });
  });
// Initialize marquee scrolling
$(document).ready(function () {
  // $('.marquee-left').marquee({
  //   duration: 16000,
  //   gap: 100,
  //   delayBeforeStart: 0,
  //   direction: 'left',
  //   duplicated: true,
  //   pauseOnHover: true
  // });

  // Optional: Close mobile menu on nav link click
  $('#mobileMenu .nav-link').on('click', function () {
    $('#mobileMenu').modal('hide');
  });
});
// products section swiper
document.addEventListener('DOMContentLoaded', () => {
  const productSwiper = new Swiper('.products-swiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    loopedSlides: 6,
    loopAdditionalSlides: 6,
    grabCursor: true,
    effect: 'coverflow',
    coverflowEffect: {
      rotate: 30,
      stretch: 0,
      depth: 100,
      modifier: 1.2,
      slideShadows: true
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 40
      }
    }
  });
});
// index counter odometer
document.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const card = entry.target;
        const od = card.querySelector('.odometer');
        const targetVal = parseInt(od.dataset.target, 10);

        // Reset to 0 before re-triggering
        od.innerHTML = 0;

        // Trigger animation after small delay
        setTimeout(() => {
          od.innerHTML = targetVal;
        }, 100); // slight delay for smoother reset
      }
    });
  }, {
    threshold: 0.6
  });

  const cards = document.querySelectorAll('.counter-section .counter-card');
  cards.forEach(card => observer.observe(card));
});
// brands swiper section
document.addEventListener('DOMContentLoaded', () => {
  const brandSwiper = new Swiper('.brands-swiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
    pagination: { el: '.brands-pagination', clickable: true },
    navigation: {
      nextEl: '.brands-button-next',
      prevEl: '.brands-button-prev'
    },
    breakpoints: {
      768: { slidesPerView: 3, spaceBetween: 10 },
      992: { slidesPerView: 3, spaceBetween: 20 },
      1200: { slidesPerView: 5, spaceBetween: 20 }
    },
    on: {
      slideChangeTransitionStart() {
        document
          .querySelectorAll('.brands-swiper .swiper-slide')
          .forEach(slide => {
            slide.style.transition = 'transform 0.6s ease, filter 0.6s ease';
            slide.style.transform = 'rotateY(20deg) scale(0.9) translateY(10px)';
            slide.style.filter = 'blur(2px) brightness(0.6)';
          });
      },
      slideChangeTransitionEnd() {
        document
          .querySelectorAll('.brands-swiper .swiper-slide')
          .forEach(slide => {
            slide.style.transform = 'rotateY(0deg) scale(1) translateY(0)';
            slide.style.filter = 'blur(0px) brightness(1)';
          });
      }
    }
  });
});

// auto trigger close offcanvas when on lg,lg+ screen
document.addEventListener('DOMContentLoaded', () => {
  const modalElement = document.getElementById('mobileMenu');

  // Close on resize (if lg+)
  window.addEventListener('resize', () => {
    if (window.innerWidth >= 992 && $(modalElement).hasClass('show')) {
      $(modalElement).modal('hide');
    }
  });

  // Close when clicking outside (only if modal is shown)
  document.addEventListener('click', (event) => {
    if (
      modalElement.classList.contains('show') &&
      !modalElement.contains(event.target) &&
      !event.target.closest('[data-target="#mobileMenu"]')
    ) {
      $(modalElement).modal('hide');
    }
  });
});
// navbar scroll spy
document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.pyro-header');
  const navWrapper = document.querySelector('.pyro-main-nav');
  const topbarHeight = document.querySelector('#headerTop')?.offsetHeight || 0;

  let originalOffsetTop = navWrapper.offsetTop;

  const stickyClass = 'pyro-navbar-sticky';

  window.addEventListener('scroll', () => {
    if (window.pageYOffset > originalOffsetTop + topbarHeight) {
      if (!navWrapper.classList.contains(stickyClass)) {
        navWrapper.classList.add(stickyClass);
        navWrapper.style.position = 'fixed';
        navWrapper.style.top = `${0}px`;
        navWrapper.style.left = '0';
        navWrapper.style.right = '0';
        navWrapper.style.zIndex = '1050';
        navWrapper.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.2)';
      }
    } else {
      navWrapper.classList.remove(stickyClass);
      navWrapper.style.position = '';
      navWrapper.style.top = '';
      navWrapper.style.left = '';
      navWrapper.style.right = '';
      navWrapper.style.zIndex = '';
      navWrapper.style.boxShadow = '';
    }
  });
});
