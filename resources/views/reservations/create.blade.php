@extends('reservations.layout')
@section('content')
<div class="card">
  <div class="card-header">Reservations page</div>
  <div class="card-body">
      
      <form action="{{ url('reservation') }}" method="post">
        {!! csrf_field() !!}
        <label>Hotel Name</label></br>
        <input type="text" name="HotelName_umhr" id="HotelName_umhr" class="form-control"></br>
        <label>Visitor Name</label></br>
        <input type="text" name="VisitorName_umhr" id="VisitorName_umhr" class="form-control"></br>
        <label>Room Type</label></br>
        <input type="text" name="RoomType_umhr" id="RoomType_umhr" class="form-control"></br>
     <label>Joining Date</label></br>
<input type="date" name="RegisteredDate" id="RegisteredDate" class="form-control"></br>
<label>Exit Date</label></br>
<input type="date" name="LeavingDate" id="LeavingDate" class="form-control"></br>





        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop