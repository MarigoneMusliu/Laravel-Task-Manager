<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Task extends Model
{
	public $timestamps = false;
    protected $table = 'crudapp_tasks';
    protected $primaryKey = 'id';
    protected $fillable = ['Titulli', 'Pershkrimi', 'Statusi'];
	
}
