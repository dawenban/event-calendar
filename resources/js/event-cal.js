$(function() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name=_token]').attr('content')
		}
	});
	$("#save_btn").click(function() {
		let fd = new FormData($('#event_form')[0]);
		let checkedWeekDays = fd.getAll('weekday[]');
		if(
			fd.get('event_name')==='' ||
			fd.get('date_from')==='' ||
			fd.get('date_to')==='' ||
			checkedWeekDays.length===0
		){
			alert('Please check your entry.');
			return;
		}
		let dayFr = new Date(fd.get('date_from'));
		let dayTo = new Date(fd.get('date_to'));
		let diff = Math.ceil(Math.abs(dayFr - dayTo) / (1000 * 60 * 60 * 24));
		let dates = [];
		let tempDate = dayFr;
		for (let i = 0; i <= diff; i++) {
			if(checkedWeekDays.indexOf(''+tempDate.getDay())>=0){
				fd.append('dates[]', tempDate.getFullYear()+'-'+(tempDate.getMonth()+1)+'-'+tempDate.getDate());
			}
			tempDate.setDate(tempDate.getDate()+1);
		}
		
		$.ajax({
			url: '/post_events',
			type: 'POST',
			data: fd,
			processData:false,
			contentType:false
		})
		.done(function(r) {
			console.log("success",r);

		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	});
});
var daysOfweek = {1:'Mon', 2:'Tue', 3:'Wed', 4:'Thu', 5:'Fri', 6:'Sat', 7:'Sun'};
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