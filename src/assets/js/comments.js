// html結合
$(function () {
  $("#contacts-section").load("footer.html");
  $(".com_comments").load("com_comments.html");
  $(".copyright").load("copyright.html");
});

$(document).on('ready', function () {
  // initialization of go to
  $.HSCore.components.HSGoTo.init('.js-go-to');

  // initialization of tabs
  $.HSCore.components.HSTabs.init('[role="tablist"]');

  // initialization of HSScrollBar component
  $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));
});

$(window).on('load', function () {
  // initialization of header
  $.HSCore.components.HSHeader.init($('#js-header'));
  $.HSCore.helpers.HSHamburgers.init('.hamburger');

  // initialization of HSMegaMenu component
  $('.js-mega-menu').HSMegaMenu({
    event: 'hover',
    pageContainer: $('.container'),
    breakpoint: 991
  });

  // initialization of horizontal progress bars
  setTimeout(function () { // important in this case
    var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
      direction: 'horizontal',
      indicatorSelector: '.js-hr-progress-bar-indicator'
    });
  }, 1);
});

$(window).on('resize', function () {
  setTimeout(function () {
    $.HSCore.components.HSTabs.init('[role="tablist"]');
  }, 200);
});