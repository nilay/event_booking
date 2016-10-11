<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Hall extends Model
{
	

	public function stands()
    {
        return $this->hasMany('App\Models\Stand');
    }

    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }

}