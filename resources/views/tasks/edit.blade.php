@extends('tasks.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('task/' .$tasks->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$tasks->id}}" id="id" />
        <label>Titulli</label></br>
        <input type="text" name="Titulli" id="Titulli" value="{{$tasks->Titulli}}" class="form-control"></br>
        <label>Pershkrimi</label></br>
        <input type="text" name="Pershkrimi" id="Pershkrimi" value="{{$tasks->Pershkrimi}}" class="form-control"></br>
        <label>Statusi</label></br>
        <input type="text" name="Statusi" id="Statusi" value="{{$tasks->Statusi}}" class="form-control"></br>
        <input type="submit" value="Modifiko" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop