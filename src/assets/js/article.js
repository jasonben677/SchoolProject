// html結合
$(function () {
    $("#contacts-section").load("footer.html");
    $(".copyright").load("copyright.html");
});

$(document).on('ready', function () {
    // initialization of go to
    $.HSCore.components.HSGoTo.init('.js-go-to');

    // initialization of tabs
    $.HSCore.components.HSTabs.init('[role="tablist"]');

    // initialization of rating
    $.HSCore.components.HSRating.init($('.js-rating'), {
        spacing: 2
    });
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
});

$(window).on('resize', function () {
    setTimeout(function () {
        $.HSCore.components.HSTabs.init('[role="tablist"]');
    }, 200);
});