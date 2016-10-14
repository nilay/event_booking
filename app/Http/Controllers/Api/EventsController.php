<?php namespace App\Http\Controllers\Api;

use Response;
use App\Models\Event;
class EventsController extends Controller
{
	public function index()
	{
		return Response::json(Event::with('hall')->get(), 200);
	}

	public function show($id){

	}

	public function hallBookingData($id){
		$event = Event::with('hall')->find($id);
		return Response::json(['cells_x'=> $event->hall->cells_x, 'cells_y'=>$event->hall->cells_y, 'data' => $event->getHallMapData()], 200);

	}
}