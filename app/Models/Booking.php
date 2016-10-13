<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Booking extends Model
{
	
	protected $fillable = ['event_id', 'stand_id', 'admin_email', 'company_name', 'logo_url', 'document_url', 'created_at', 'updated_at'];
}