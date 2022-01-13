@section('title')
Eventor
@endsection
<x-main>
	<div class="container mt-5">
		<h3>Calendar</h3>
		<hr>
		<div class="row">
			<div class="col-4">
				<div class="row">
					<div class="row">
						<div class="form-group mb-3">
							<label class="form-label">Event</label>
							<input type="text" name="event_name" class="form-control" form="event_form">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-6">
							<div class="form-group">
								<label class="form-label">From</label>
								<input type="date" name="date_from" class="form-control form-control-sm" value="" form="event_form">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label class="form-label">To</label>
								<input type="date" name="date_to" class="form-control form-control-sm" value="" form="event_form">
							</div>
						</div>
					</div>
					<div class="row mb-3">{{-- weekdays --}}
						<div class="col w_day">
							<div class="form-check">
								<input type="checkbox" name="weekday[]" form="event_form" value="1" class="form-check-input" id="w_1">
								<label for="w_1" class="form-check-label">Mon</label>
							</div>
						</div>
						<div class="col w_day">
							<div class="form-check">
								<input type="checkbox" name="weekday[]" form="event_form" value="2" class="form-check-input" id="w_2">
								<label for="w_2" class="form-check-label">Tue</label>
							</div>
						</div>
						<div class="col w_day">
							<div class="form-check">
								<input type="checkbox" name="weekday[]" form="event_form" value="3" class="form-check-input" id="w_3">
								<label for="w_3" class="form-check-label">Wed</label>
							</div>
						</div>
						<div class="col w_day">
							<div class="form-check">
								<input type="checkbox" name="weekday[]" form="event_form" value="4" class="form-check-input" id="w_4">
								<label for="w_4" class="form-check-label">Thu</label>
							</div>
						</div>
						<div class="col w_day">
							<div class="form-check">
								<input type="checkbox" name="weekday[]" form="event_form" value="5" class="form-check-input" id="w_5">
								<label for="w_5" class="form-check-label">Fri</label>
							</div>
						</div>
						<div class="col w_day">
							<div class="form-check">
								<input type="checkbox" name="weekday[]" form="event_form" value="6" class="form-check-input" id="w_6">
								<label for="w_6" class="form-check-label">Sat</label>
							</div>
						</div>
						<div class="col w_day">
							<div class="form-check">
								<input type="checkbox" name="weekday[]" form="event_form" value="0" class="form-check-input" id="w_7">
								<label for="w_7" class="form-check-label">Sun</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<form id="event_form"></form>
							<button class="btn btn-primary" id="save_btn">Save</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-8">
				<h2 id="month_year">{{ date_format($today, 'M Y') }}</h2>
				<div class="row">
					<div class="col">
						<table class="table table-bordered" id="event_org">
							<tbody>
								@php
								$firstDay = date_format(date_create($today->year . "-" . $today->month . "-1"), 'Y-m-d');
								$days = date_format($today, 't');
								@endphp
								@for ( $i=0; $i < $days; $i++ ) 
									@php
									$each = strtotime($firstDay . "+"."$i days");
									@endphp
								<tr>
									<td data-eachDay='{{date("Y-m-d,N", $each)}}'>{{ date('j D', $each) }}</td>
								</tr>
								@endfor
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-main>