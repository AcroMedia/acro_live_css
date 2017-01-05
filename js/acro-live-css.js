/**
 * Live CSS JS.
 */
(function ($, Drupal) {
  // Live CSS Nav.
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

  // Typography.
  $('.print-font-family').each(function() {
    var fontFamily = $(this).css('font-family');
    $(this).append(' - ' + fontFamily);
  });

  $('.print-font-size').each(function() {
    var fontSize = $(this).css('font-size');
    $(this).append(' - ' + fontSize);
  });
})(jQuery, Drupal);
