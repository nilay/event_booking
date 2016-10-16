<?php namespace App\Http\Controllers\Api;

use Response;
use App\Models\Event;
class EventsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Event (API) controller
    |--------------------------------------------------------------------------
    |
    | This controller act as a REST api for React JS component to render 
    | vertual hall map along with its booking information
    |
    */
	

	/**
     * Returns all events stored in DB
     * @return list of events in json form
     */
	public function index()
	{
		return Response::json(Event::with('hall')->get(), 200);
	}

	/**
     * Returns hall booking data and its stands of specific given Event
     * @return list of stands with their status (vacant/booked) in json form
     */
	public function hallBookingData($id){
		$event = Event::with('hall')->find($id);
		return Response::json(['cells_x'=> $event->hall->cells_x, 'cells_y'=>$event->hall->cells_y, 'data' => $event->getHallMapData()], 200);

	}
}