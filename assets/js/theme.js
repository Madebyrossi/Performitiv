$(document).ready(function(){

	// Desktop menu
	$('ul.nav li.dropdown').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});

	// Mobile menu
	$('#menu').slicknav();
	
	// Infographic
	jQuery(function () {
		jQuery('#myTab a.first').tab('show')
	})

	// Product slider
    $("#lightSlider").lightSlider({
        item: 1,
        autoWidth: false,
        slideMove: 1,
        slideMargin: 0,
        mode: "slide",
        enableDrag: false,
        adaptiveHeight: true,
    });
	
});