/*
	Load more content with jQuery - May 21, 2013
	(c) 2013 @ElmahdiMahmoud
*/   

$(function () {
    $("#wrapper div").slice(0, 4).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $("#wrapper div:hidden").slice(0, 2).slideDown();
        if ($("#wrapper div:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
        }
        $('#wrapper').animate({
            scrollTop: $(this).offset().top
        }, 1000);
    });
}); 

$('#wrapper').scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.totop a').fadeIn();
    } else {
        $('.totop a').fadeOut();
    }
});
