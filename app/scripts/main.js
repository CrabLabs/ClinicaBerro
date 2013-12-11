(function ($) {
	'use strict';

	$('video').on('click', function () {
		if ($(this)[0].paused) {
			$(this)[0].play();
			$('#play_button').fadeOut();
		} else {
			$(this)[0].pause();
			$('#play_button').fadeIn();
		}
	});

}(jQuery));
