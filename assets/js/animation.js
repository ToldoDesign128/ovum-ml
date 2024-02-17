// Arrow slider animation
jQuery('.swiper-button-prev').hover(function () {
  var arrowAnimation = jQuery(this).closest('.arrow-container').find('#arrowAnimation');
  arrowAnimation.toggleClass('prev-animation').toggleClass('left-[21px]');
});