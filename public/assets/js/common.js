(function($) {

	$(document).ready(function() {

		$('html').removeClass('no-js').addClass('js');

		// Placeholder polyfill
		$('input, textarea').placeholder();

		BaseFrontEnd.common.init();
	});

})(jQuery);