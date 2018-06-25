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


// start drag scrolling all page
(function($) {
    $.dragScroll = function(options) {
        var settings = $.extend({
            scrollVertical: true,
            scrollHorizontal: true,
            cursor: null
        }, options);

        var clicked = false,
        clickY, clickX;

        var getCursor = function() {
            if (settings.cursor) return settings.cursor;
            if (settings.scrollVertical && settings.scrollHorizontal) return 'move';
            if (settings.scrollVertical) return 'row-resize';
            if (settings.scrollHorizontal) return 'col-resize';
        }

        var updateScrollPos = function(e, el) {
            $('html').css('cursor', getCursor());
            var $el = $(el);
            settings.scrollVertical && $el.scrollTop($el.scrollTop() + (clickY - e.pageY));
            settings.scrollHorizontal && $el.scrollLeft($el.scrollLeft() + (clickX - e.pageX));
        }

        $(document).on({
            'mousemove': function(e) {
                clicked && updateScrollPos(e, this);
            },
            'mousedown': function(e) {
                clicked = true;
                clickY = e.pageY;
                clickX = e.pageX;
            },
            'mouseup': function() {
                clicked = false;
                $('html').css('cursor', 'auto');
            }
        });
    }
}(jQuery))

$.dragScroll();
// End drag scrolling all page

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