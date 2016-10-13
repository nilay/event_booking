<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class HallsController extends Controller
{
	public function index(Request $request, $id)
	{
		$event = Event::with('hall')->find($id);
		$hallMapData = $event->getHallMapData();

		return view('halls/index', ['event'=>$event, 'hall_map_data'=>$hallMapData]);
		
	}
}