function myScroll(elem) {
	$("html, body").animate({
        scrollTop: $(elem).offset().top -80
    }, 1200, 'swing');
}


$( document ).ready(function() {

	$('.navBar-mobile-shutdownLight').hide();
	$('.navBar-mobile ul').hide();
	$('.navBar-mobile i.fa-times').hide();

	$('.navBar-mobile i.fa-bars').click('on', function(){
		$(this).hide();
		$('.navBar-mobile-shutdownLight').show();
		$('.navBar-mobile ul').show();
		$('.navBar-mobile i.fa-times').show();
	});

	$('.navBar-mobile i.fa-times').click('on', function(){
		$(this).hide();
		$('.navBar-mobile-shutdownLight').hide();
		$('.navBar-mobile ul').hide();
		$('.navBar-mobile i.fa-bars').show();
	});

});
