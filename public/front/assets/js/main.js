/***************************************************
==================== JS INDEX ======================
****************************************************
01. Preloader
02. Go top Top
03. Offcanvas Menu Control
04. Header Search
05. Header | Home One
06. Header | Home Two
07. Counter Activation
08. Testimonial Slider | Home 1
09. Testimonial Slider | Home 2
10. Team Slider
11. MixitUp activation
12. WOW JS Activation
13. Mobile Menu Activation
14. ProgressBar activation
15. Banner Slider



****************************************************/

(function ($) {
  "use strict";

  /////////////////////////////////////////////////////
  // 01. Preloader
  var preloader = document.querySelector("#preloader");
  var get_body = document.querySelector("body");

  get_body.onload = function () {
    preloader.style.display = "none";
  };
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 02. Go top Top
  let scroll_top = document.getElementById("scroll_top");

  if (scroll_top) {
    window.onscroll = function () { scrollTopFunc() };

    function scrollTopFunc() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        scroll_top.classList.add('showed');
      } else {
        scroll_top.classList.remove('showed');
      }
    }

    scroll_top.addEventListener('click', function () {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    });
  }
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 03. Offcanvas Menu Control
  $('.menu_icon').on('click', function () {
    $('.offcanvas__area').addClass('showed');
  });

  $('#offcanvas_close').on('click', function () {
    $('.offcanvas__area').removeClass('showed');
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 04. Header Search
  $('.search-icon').on('click', function () {
    $(this).hide();
    $('.search-close').show();
    $('.search__form').addClass('showed');
  });

  $('.search-close').on('click', function () {
    $(this).hide();
    $('.search-icon').show();
    $('.search__form').removeClass('showed');
  });

  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 06. 
  var share_btn = document.querySelectorAll('.share-btn');
  var social_share = document.querySelectorAll('.social-share');

  for (let i = 0; i < share_btn.length; i++) {
    share_btn[i].addEventListener('click', function () {
      social_share[i].classList.toggle('active');
    });

  }
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 06. Magnific Popup Activate
  $('.popup-link').magnificPopup({ type: 'iframe' });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 07. Counter Activation
  const counter_1 = window.counterUp.default
  const counter_cb = entries => {

    entries.forEach(entry => {
      const el = entry.target
      if (entry.isIntersecting && !el.classList.contains('is-visible')) {
        counter_1(el, {
          duration: 1500,
          delay: 16,
        })
        el.classList.add('is-visible')
      }
    })
  }

  const counter_1_io = new IntersectionObserver(counter_cb, {
    threshold: 1
  })

  const counter_1_els = document.querySelectorAll('.counter_fast');
  counter_1_els.forEach((el) => {
    counter_1_io.observe(el)
  });

  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 07. Counter Activation
  const counter_2 = window.counterUp.default
  const counter_cb_2 = entries => {

    entries.forEach(entry => {
      const el = entry.target
      if (entry.isIntersecting && !el.classList.contains('is-visible')) {
        counter_2(el, {
          duration: 3000,
          delay: 16,
        })
        el.classList.add('is-visible')
      }
    })
  }

  const counter_2_io = new IntersectionObserver(counter_cb_2, {
    threshold: 1
  })

  const counter_2_els = document.querySelectorAll('.counter_medium');
  counter_2_els.forEach((el) => {
    counter_2_io.observe(el)
  });

  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 07. Counter Activation
  const counter_3 = window.counterUp.default
  const counter_cb_3 = entries => {

    entries.forEach(entry => {
      const el = entry.target
      if (entry.isIntersecting && !el.classList.contains('is-visible')) {
        counter_3(el, {
          duration: 5000,
          delay: 16,
        })
        el.classList.add('is-visible')
      }
    })
  }

  const counter_3_io = new IntersectionObserver(counter_cb_3, {
    threshold: 1
  })

  const counter_3_els = document.querySelectorAll('.counter_slow');
  counter_3_els.forEach((el) => {
    counter_3_io.observe(el)
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // Progress Bar Activate
  $('.skill_active').progressBar({
    height: "10",
    animation: true,
    barColor: "#B69974",
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  AOS.init({
    once: true,
    offset: 200,
    duration: 1000,
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 10. Text Slider
  var text_slider = new Swiper(".textslider__active", {
    loop: true,
    speed: 7000,
    spaceBetween: 0,
    autoplay: {
      delay: 1,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 15. Text Slider
  var text_slider_2 = new Swiper(".textslider__active-2", {
    loop: true,
    speed: 3000,
    spaceBetween: 30,
    slidesPerView: 'auto',
    autoplay: {
      delay: 1,
    },
  });
  /////////////////////////////////////////////////////

  /////////////////////////////////////////////////////
  // 10. Text Slider
  var text_slider = new Swiper(".textslider__active-3", {
    spaceBetween: 0,
    centeredSlides: true,
    speed: 7000,
    autoplay: {
      delay: 1,
      reverseDirection: true
    },
    loop: true,
    loopedSlides: 4,
    slidesPerView:'auto',
    allowTouchMove: false,
    disableOnInteraction: true,
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });
  /////////////////////////////////////////////////////

  /////////////////////////////////////////////////////
  // 15. Text Slider down
  var text_slider_2 = new Swiper(".textslider__down-2", {
    loop: true,
    speed: 3000,
    spaceBetween: 30,
    autoplay: {
      delay: 1,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 2,
      },
    },
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 11.1. 
  var product_slider = new Swiper(".product_slider", {
    loop: true,
    speed: 5000,
    slidesPerView: 1,
    spaceBetween: 20,
    autoplay: {
      delay: 3,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 3,
      },
      1400: {
        slidesPerView: 3,
      },
    },
  });
  /////////////////////////////////////////////////////
  // 11. 
  var brand_slider = new Swiper(".brand__slider", {
    loop: true,
    speed: 3000,
    slidesPerView: 2,
    spaceBetween: 50,
    autoplay: {
      delay: 1,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 4,
      },
    },
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 12. 
  var testimonial_slider_3 = new Swiper(".testimonial__slider-3", {
    loop: true,
    speed: 3000,
    spaceBetween: 50,
    slidesPerView: 1,
    autoplay: {
      delay: 1500,
    },
  });
  
  var testimonial_five_active = new Swiper(".testimonial-five-active", {
    loop: true,
    speed: 3000,
    spaceBetween: 50,
    slidesPerView: 2,
    autoplay: {
      delay: 1500,
    },
    breakpoints: {
      375: {
        slidesPerView: 1,
      },
      640: {
        slidesPerView: 1,
      },
      734: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 2,
      },
      1400: {
        slidesPerView: 2,
      },
    },
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 13. Mobile Menu Activation
  $('.offcanvas-menu').meanmenu({
    meanScreenWidth: "1365",
    meanMenuContainer: '.offcanvas__menu',
    meanMenuCloseSize: '24px',
  });


  
    let home3HeroShape = gsap.timeline();

    home3HeroShape.from(".hero__title-3-wrap .line", {
      xPercent: -100,
      duration: 1,
    }, '+=1');

    if ($('#hero_video').length){
      // Hero Video
      var hero_video = document.querySelector('.hero__video');
      var hero_video_icon = document.querySelector('#hero_video');

      hero_video_icon.addEventListener('click', function(e) {
        e.preventDefault();

        hero_video.classList.toggle('show');
      });
    }
})(jQuery);



$(document).ready(function () {
  const $video = $('.hero__video');

  const observer = new MutationObserver(function () {
    if ($video.hasClass('show')) {
      $('.hero__area.sustain .hero__btm p, span.visibleText').css('opacity', 0);
    } else {
      $('.hero__area.sustain .hero__btm p, span.visibleText').css('opacity', 1);
    }
  });

  observer.observe($video[0], {
    attributes: true,
    attributeFilter: ['class']
  });
});
