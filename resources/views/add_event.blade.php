@section('title')
Eventor
@endsection
<x-main>
	<div class="container">
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
								<input type="checkbox" name="w_mon" value="Mon" class="form-check-input" id="w_1">
								<label for="w_1" class="form-check-label">Mon</label>
							</div>
						</div>
						<div class="col w_day">
							<div class="form-check">
								<input type="checkbox" name="w_mon" value="Tue" class="form-check-input" id="w_2">
								<label for="w_2" class="form-check-label">Tue</label>
							</div>
						</div>
						<div class="col w_day">
							<div class="form-check">
								<input type="checkbox" name="w_mon" value="Wed" class="form-check-input" id="w_3">
								<label for="w_3" class="form-check-label">Wed</label>
							</div>
						</div>
						<div class="col w_day">
							<div class="form-check">
								<input type="checkbox" name="w_mon" value="Thu" class="form-check-input" id="w_4">
								<label for="w_4" class="form-check-label">Thu</label>
							</div>
						</div>
						<div class="col w_day">
							<div class="form-check">
								<input type="checkbox" name="w_mon" value="Fri" class="form-check-input" id="w_5">
								<label for="w_5" class="form-check-label">Fri</label>
							</div>
						</div>
						<div class="col w_day">
							<div class="form-check">
								<input type="checkbox" name="w_mon" value="Sat" class="form-check-input" id="w_6">
								<label for="w_6" class="form-check-label">Sat</label>
							</div>
						</div>
						<div class="col w_day">
							<div class="form-check">
								<input type="checkbox" name="w_mon" value="Sun" class="form-check-input" id="w_7">
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
				<h1>Jan 2022</h1>
				<div class="row">
					<div class="col">
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td>data</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-main>