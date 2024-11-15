@extends('tasks.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>To do list</h2>
                    </div>
					
                    <div class="card-body">
                        <a href="{{ url('/task/create') }}" class="btn btn-success btn-sm" title="Shto  Detyra te reja">
                            <i class="fa fa-plus" aria-hidden="true"></i> Shto te reja 
							
							
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titulli</th>
                                        <th>Pershkrimi</th>
                                        <th>Statusi</th>
										<th>Veprimet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tasks as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Titulli }}</td>
                                        <td>{{ $item->Pershkrimi }}</td>
                                        <td>{{ $item->Statusi }}</td>
                                        <td>
                                            <a href="{{ url('/task/' . $item->id . '/edit') }}" title="Edit Task"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ndrysho</button></a>
                                            <form method="POST" action="{{ url('/task' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('Delete') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Task" onclick="return confirm(&quot;Deshironi ta fshini?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Fshij</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection