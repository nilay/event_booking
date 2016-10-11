<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Event extends Model
{
	

	public function hall()
    {
        return $this->hasOne('App\Models\Hall', 'id');
    }

    public function bookings()
    {
    	return $this->hasMany('App\Models\Booking', 'id');
    }

}