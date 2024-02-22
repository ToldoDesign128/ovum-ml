//Hamburger menu
jQuery("#hamburgerButton").click(function () {
    jQuery("#hamburgerButton").toggleClass("is-active");
    jQuery("#logo-header").toggleClass("hide-logo");
    jQuery("#menu").toggleClass("open");
    jQuery("body").toggleClass("overflow-hidden");
  });