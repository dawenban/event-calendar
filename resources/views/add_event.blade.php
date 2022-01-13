@section('title')
Eventor
@endsection
<x-main>
	<div class="container-fluid">
		<h3>Calendar</h3>
		<hr>
		<div class="row">
			<div class="col-4">
				<div class="row">
					<div class="form-group">
						<span class="col-form-label form-control">Event</span>
						<input type="text" name="event_name" class="form-control">
					</div>
					<div class="row align-middle">
						<div class="col-6">
							<div class="form-group">
								<span class="col-form-label form-control">From</span>
								<input type="date" name="date_from" class="form-control">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<span class="col-form-label form-control">To</span>
								<input type="date" name="date_to" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">{{-- weekdays --}}
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
							<button class="btn btn-primary">Save</button>
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