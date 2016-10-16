<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class HallsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Hall Controller
    |--------------------------------------------------------------------------
    |
    | This controller generates virtual hall map along with booking informatiom
    |
    */
	

    /**
     * Render react component to draw hall vertual map
     */
	public function index(Request $request, $id)
	{
		$event = Event::with('hall')->find($id);
		$hallMapData = $event->getHallMapData();
		
		return view('halls/reactindex', ['event'=>$event]);
		
	}
}