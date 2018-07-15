$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $("menu").addClass("scrolled");
    } else {
        $("menu").removeClass("scrolled");
    }

    document.addEventListener( 'wpcf7mailsent', function( event ) {
        $('.wpcf7-response-output').addClass('alert alert-success');
    }, false );
    document.addEventListener( 'wpcf7invalid', function( event ) {
        $('.wpcf7-response-output').addClass('alert alert-danger');
    }, false );
    document.addEventListener( 'wpcf7spam', function( event ) {
        $('.wpcf7-response-output').addClass('alert alert-warning');
    }, false );
    document.addEventListener( 'wpcf7mailfailed', function( event ) {
        $('.wpcf7-response-output').addClass('alert alert-warning');
    }, false );
});