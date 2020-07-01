function myScroll(elem) {
	$("html, body").animate({
        scrollTop: $(elem).offset().top -80
    }, 1200, 'swing');
}
