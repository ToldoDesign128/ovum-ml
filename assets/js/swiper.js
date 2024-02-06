
const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

// Mobile Sroller
const swiperScroller = new Swiper('.swiperScroller', {
  // Optional parameters
  loop: false,
   
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});

// Mobile Sroller Sponsor
const swiperScrollerSponsor = new Swiper('.swiperScrollerSponsor', {
  // Optional parameters
  loop: true,
   
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});

// Testimonial
const swiperTestimonial = new Swiper('.swiperTestimonial', {
  // Optional parameters
  loop: false,
   
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});