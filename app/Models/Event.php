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
    	return $this->hasMany('App\Models\Booking');
    }


    public function getHallMapData()
    {
    	$hall = $this->hall;
    	$stands = $hall->stands;
    	$bookings = $this->bookings;
    	$mapData = [];
    	for($i=1; $i<= $hall->cells_y; $i++){
    		for($j=1; $j <= $hall->cells_x; $j++){
    			$mapData["$i$j"] = self::hallStandData($i, $j, $stands, $bookings);
    		}

    	}

    	return $mapData;
    }

    public static function hallStandData($standRow, $standCol, $stands, $bookings){
    	$standId = null;
    	$bookingDetails = null;
    	foreach($stands as $stand){
    		if($stand->cell_y == $standRow && $stand->cell_x == $standCol){
    			$standId = $stand->id;
    			break;
    		}
    	}

    	// Grid is not stand but a vacant place.
    	// No need to put booking details
    	if(!$standId){
    		return [
    			'is_stand'=>false, 
    			'stand_id'=>null, 
    			'is_booked'=>false, 
    			'booking'=>false
    		];
    	}

    	// has this stand been booked?
    	foreach($bookings as $booking){
    		if($booking->stand_id == $standId){
    			$bookingDetails = $booking;
    			break;
    		}
    	}

    	return [
    		'is_stand'=>true, 
    		'stand_id'=>$standId, 
    		'is_booked'=>(bool) $bookingDetails, 
    		'booking'=>$bookingDetails
    	];
    	
    }


    	

}