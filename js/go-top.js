$('#go-back').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 600);
        return false;
    });