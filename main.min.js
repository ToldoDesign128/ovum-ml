
//Hamburger menu
jQuery("#hamburgerButton").click(function () {
    jQuery("#hamburgerButton").toggleClass("is-active");
    jQuery("#menu").toggleClass("hidden");
    jQuery("#menu").toggleClass("open");
  });
var btn = jQuery('#ScrollTopBtn');

btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '300');
});
var scroll_offset = 300;

jQuery(window).scroll(function () {
    var selettore = jQuery(window);
    if (jQuery('#infoBtn').length) {
        if (selettore.scrollTop() > scroll_offset) {
            jQuery('#infoBtn').addClass('revealed');
        } else {
            jQuery('#infoBtn').removeClass('revealed');
        }
    }
});