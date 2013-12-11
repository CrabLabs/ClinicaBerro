(function ($) {
	'use strict';

	$('video').on('click', function () {
		if ($(this)[0].paused) {
			$(this)[0].play();
		} else {
			$(this)[0].pause();
		}
	});

}(jQuery));
