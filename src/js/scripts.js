(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it awayù

		// Backtotop
		var
			scrollFunction = function() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					document.getElementById("back-to-top").style.display = "block";
				} else {
					document.getElementById("back-to-top").style.display = "none";
				}
			},
			topFunction = function() {
				document.body.scrollTop = 0; // For Safari
				document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
			};
		window.onscroll = function() {scrollFunction()};

		// Offcanvas menu
		$('[data-toggle="offcanvas"]').on('click', function () {
			$('.offcanvas-collapse').toggleClass('open')
		});


	});

} ( this, jQuery ));

