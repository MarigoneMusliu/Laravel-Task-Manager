<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//Route::resource(hotel, HotelController::class);
//ketu eshte shtuar kodi ne vijim - prej ketu hapet projekti
//Route::resource('hotel','App\Http\Controllers\HotelController');
Route::resource('reservation','App\Http\Controllers\ReservationController');

