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
			notify('Event'+(r.dates.length>1?'s':'')+' successfully saved.', 'bg-success');
			let rows = $("#event_org tbody>tr");
			rows.each(function() {
				$(this).removeClass('table-success');
				if(r.dates.indexOf($(this).data('eachday').split(',')[0])>=0) {
					$(this).addClass('table-success');
					$(this).find('td:nth-child(2)').html(r.event_name);
				}
			});
		})
		.fail(function() {
			notify('Something went wrong.', 'bg-danger');
		});
	});
	toast = new bootstrap.Toast("#toast");
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
var toast;
function notify(m,c){
	if(!m){
		return;
	}
	$("#toast").removeClass('bg-danger bg-success').addClass(c);
	$("#toast div.toast-body").html(m);
	toast.show();
}