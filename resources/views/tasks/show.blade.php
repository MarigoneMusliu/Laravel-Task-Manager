@extends('tasks.layout')
@section('content')
<div class="card">
  <div class="card-header">Tasks Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Titulli : {{ $tasks->Titulli }}</h5>
        <p class="card-text">Pershkrimi : {{ $tasks->Pershkrimi }}</p>
        <p class="card-text">Statusi : {{ $tasks->Statusi }}</p>
  </div>
      
    </hr>
  
  </div>
</div>