/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


Drupal.behaviors.carrousel = {
  attach: function(context, settings) {
    $('.view-carrousel').flexslider({
      controlNav: false,
      directionNav: false
    });
  }
}


Drupal.behaviors.responsive = {
  attach: function(context, settings) {
    $('#block-system-main-menu ul li a#menu-responsive').click(function(e) {
      $(this).parent().parent().parent().find('li').toggle();
      $(this).parent().show();
      e.preventDefault();
      return false;
    });
  }
}

})(jQuery, Drupal, this, this.document);
