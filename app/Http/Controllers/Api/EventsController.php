<?php namespace App\Http\Controllers\Api;

use Response;
use App\Models\Event;
class EventsController extends Controller
{
	public function index()
	{
		return Response::json(Event::with('hall')->get(), 200);
	}
}