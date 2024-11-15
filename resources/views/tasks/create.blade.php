@extends('tasks.layout')
@section('content')
<div class="card">
  <div class="card-header">Faqja e Detyrave</div>
  <div class="card-body">
      
      <form action="{{ url('task') }}" method="post">
        {!! csrf_field() !!}
        <label>Titulli</label></br>
        <input type="text" name="Titulli" id="Titulli" class="form-control"></br>
        <label>Pershkrimi</label></br>
        <input type="text" name="Pershkrimi" id="Pershkrimi" class="form-control"></br>
        <label>Statusi</label></br>
        <input type="text" name="Statusi" id="Statusi" class="form-control"></br>
        <input type="submit" value="Ruaj" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop