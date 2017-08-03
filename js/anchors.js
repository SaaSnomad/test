function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

$(window).scroll(function (e) {
    var anchors = $('.anchor');
    for (var i = 0; i < anchors.length; ++i) {
        if (isScrolledIntoView(anchors[i])) {
            var href = $(anchors[i]).attr('href');
            if(history.pushState) {
                history.pushState(null, null, href);
            }
            else {
                location.hash = href.slice(href.indexOf('#') + 1);
            }
            break;
        }
    }
});

$(function () {
    var hash = location.hash;
    if (hash) {
        // Scroll to the element with the given hash.
        var anchors = $('.anchor');
        for (var i = 0; i < anchors.length; ++i) {
            if ($(anchors[i]).attr('href') === hash) {
                $(window).scrollTop($(anchors[i]).offset().top);
                break;
            }
        }
    }
});