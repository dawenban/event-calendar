$(function() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name=_token]').attr('content')
		}
	});
});

var shortdate = new Intl.DateTimeFormat('default', { 
	month: 'short',
	day: '2-digit',
	year: 'numeric'
});
var date = new Intl.DateTimeFormat('default', { 
	month: 'short',
	day: '2-digit',
	weekday: 'short',
	year: 'numeric'
});