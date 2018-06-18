/* global $, jQuery, alert */

$(document).ready(function () {

    "use strict";

    // start Nice Scroll
    // code to get selected color theme, to use in NiceScroll.js when the user refresh page
    // var currentColor = localStorage.getItem('selectedColor');
    // (currentColor === null) ? currentColor = "#E41B17" : currentColor;

    $(".content").niceScroll({
        zindex: 9999,
        cursorcolor: "#E41B17",
        cursorwidth: "6px",
        horizrailenabled: false
    });
    // End Nice Scroll


});

// Loading Screen
$(window).load(function () {

    "use strict";

	// Loading Elements
	$(".loading-overlay .cssload-loader").fadeOut(1500, function () {
		// Show The Scroll
		$("body").css("overflow", "auto");

		$(this).parent().fadeOut(100, function () {
			$(this).remove();
		});

	});
});