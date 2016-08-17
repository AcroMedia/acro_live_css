/**
 * Acro Live JS
 */

(function ($, Drupal) {

  // Live CSS Nav
  if ($('.live-css-nav').length) {
    $('body').scrollspy({
      target: '.live-css-nav-col'
    });

    $('.live-css-nav').affix({
      offset: {
        top: $('.live-css-nav').offset().top
      }
    });
  }

})(jQuery, Drupal);
