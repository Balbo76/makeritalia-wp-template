(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away
		$('[data-toggle="offcanvas"]').on('click', function () {
			$('.offcanvas-collapse').toggleClass('open')
		})


	});

} ( this, jQuery ));

