<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Reservation extends Model
{
	public $timestamps = false;
    protected $table = 'crudapp_reservation';
    protected $primaryKey = 'id';
    protected $fillable = ['HotelName_umhr', 'VisitorName_umhr', 'RoomType_umhr', 'RegisteredDate', 'LeavingDate'];
	
}
