@extends('reservations.layout')
@section('content')
<div class="card">
  <div class="card-header">Reservations Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">HotelName_umhr : {{ $reservations->HotelName_umhr }}</h5>
        <p class="card-text">VisitorName_umhr : {{ $reservations->VisitorName_umhr }}</p>
        <p class="card-text">RoomType_umhr : {{ $reservations->RoomType_umhr }}</p>
        <p class="card-text">RegisteredDate : {{ $reservations->RegisteredDate }}</p>
        <p class="card-text">LeavingDate : {{ $reservations->LeavingDate }}</p>
  </div>
      
    </hr>
  
  </div>
</div>