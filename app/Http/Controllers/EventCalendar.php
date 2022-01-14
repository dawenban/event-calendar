<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventCalendar extends Controller
{
	public function add_event(Request $r){
		if(
			($r->date_from?:'') === '' ||
			($r->date_to?:'') === '' ||
			sizeof($r->dates?:[]) === 0 ||
			($r->event_name?:'')=== ''
		){
			abort(500);
		}
		$events = [];
		foreach($r->dates as $date){
			$event = [
				'EventName' => $r->event_name,
				'Date' => $date,
				'created_at' => now()
			];
			array_push($events, $event);
		}
		Event::insert($events);
		return $r;
	}
}
