<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Stand extends Model
{
	
	public function hall()
    {
        return $this->belongsTo('App\Models\Hall');
    }

}