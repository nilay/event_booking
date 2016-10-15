<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
class BookingsController extends Controller
{
	public function index(Request $request, $id)
	{

		return view('bookings/index', ['event_id' => $id, 'stand_id'=>$request->input('stand_id')]);
	}

	public function store(Request $request)
	{
		$event_id = $request->input('event_id');

		Booking::create([
			'event_id' => $event_id,
			'stand_id' => $request->input('stand_id'),
			'company_name' => $request->input('company_name'),
			'logo_url' => $request->input('logo'),
			'document_url' => $request->input('document'),
			'admin_email' => $request->input('email')
		]);
		
		$request->session()->flash('message', 'Reservation done successfully!');
		return redirect("/events/$event_id/hall");
	}
}