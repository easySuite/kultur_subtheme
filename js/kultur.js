(function ($) {
  'use strict';

  function updateSubmenu() {
    var secondaryMenu = $('.secondary-menu-wrapper');
    $('.site-name-wrapper').after(secondaryMenu);
    $('<div class="transform"></div>' ).insertBefore('.secondary-menu');
  }

 $(document).ready(function() {
    updateSubmenu();

  });
})(jQuery);
