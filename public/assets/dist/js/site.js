// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
(function($) {

	$(document).ready(function() {

		$('html').removeClass('no-js').addClass('js');

		// Placeholder polyfill
		$('input, textarea').placeholder();

		BaseFrontEnd.common.init();
	});

})(jQuery);
// Declare our namespace.
var BaseFrontEnd = window.BaseFrontEnd || {};

BaseFrontEnd.common = {

	init: function(opts){
		console.log('Site initialized.');
	},
};
