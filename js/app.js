$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $("menu").addClass("scrolled");
    } else {
        $("menu").removeClass("scrolled");
    }
});