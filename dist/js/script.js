// swiper
const swiper = new Swiper('.swiper', {
  loop: true,
  autoplay: {
    delay: 5000,
  },
});

//drawer menu
jQuery('.js-drawer-icon').on('click', function (e) {
  e.preventDefault();
  jQuery('.js-drawer-icon').toggleClass('is-open');
  jQuery('.js-drawer-menu').toggleClass('is-open');
  return false;
})

//service faq
jQuery('.js-faq-item').on('click', function () {
  jQuery(this).children('.js-faq-a').slideToggle();
  jQuery(this).find('.js-faq-icon').toggleClass('is-open');
  jQuery(this).find('.js-faq-q-text').toggleClass('is-open');

  return false;
})

//scroll
jQuery('a[href^="#"]').on('click', function () {
  let header = jQuery('.l-header').outerHeight();
  let id = jQuery(this).attr('href');
  let target = jQuery(id === "#" ? "html" : id)
  let position = jQuery(target).offset().top

  jQuery('html, body').animate({
    scrollTop: position - header,
  }, 500)
})

// link to the section in other page
jQuery(window).on('load', function () {
  let header = $('.l-header').outerHeight();
  let urlHash = location.hash;
  if (urlHash !== '#') {
    let position = $(urlHash).offset().top - header - 40;
    $('html, body').animate({ scrollTop: position }, 0);
  }
});

// color of select input
jQuery('select option:first-child').addClass('option-invalid');
jQuery('select').on('change', function() {
  let invalidSelected = jQuery(this).find('option:selected').hasClass('option-invalid');
  if(invalidSelected) {
    jQuery(this).removeClass('valid-selected');
  } else {
    jQuery(this).addClass('valid-selected');
  }
})


//to-top button
jQuery(window).on('scroll', function () {
  let BtnShowScrollAmount = 100;
  let currentScrollAmount = jQuery(this).scrollTop()

  if (BtnShowScrollAmount < currentScrollAmount) {
    jQuery('.js-to-top-btn').addClass('is-show');
    jQuery('.js-to-top-btn').fadeIn(300)
  } else {
    jQuery('.js-to-top-btn').removeClass('is-show');
  }
})
