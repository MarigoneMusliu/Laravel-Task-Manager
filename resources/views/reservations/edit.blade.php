@extends('reservations.layout')
@section('content')
<div class="card">
  <div class="card-header"> Hotel Reservation</div>
  <div class="card-body">
      
      <form action="{{ url('reservation/' .$reservations->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$reservations->id}}" id="id" />
        <label>Hotel Name</label></br>
        <input type="text" name="HotelName_umhr" id="HotelName_umhr" value="{{$reservations->HotelName_umhr}}" class="form-control"></br>
        <label>Visitor Name</label></br>
        <input type="text" name="VisitorName_umhr" id="VisitorName_umhr" value="{{$reservations->VisitorName_umhr}}" class="form-control"></br>
        <label>Room Type</label></br>
        <input type="text" name="RoomType_umhr" id="RoomType_umhr" value="{{$reservations->RoomType_umhr}}" class="form-control"></br>
        <label>Joining Date</label></br>
<input type="date" name="RegisteredDate" id="RegisteredDate" class="form-control"></br>
<label>Exit Date</label></br>
<input type="date" name="LeavingDate" id="LeavingDate" class="form-control"></br>

        <input type="submit" value="Modify" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop