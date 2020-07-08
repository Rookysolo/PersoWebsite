// Scrolling button function
function myScroll(elem) {

	$("html, body").animate({
        scrollTop: $(elem).offset().top -80
    }, 1200, 'swing');

}

//i18n
$.i18n( {
	locale: 'fr'
} );

$.i18n().load({
	'fr': 'languages/fr.json',
	'en': 'languages/en.json'
}).done(
	() => {
		$('html').i18n();
	}
);

$( document ).ready(function() {

	// Mobile navbar
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
