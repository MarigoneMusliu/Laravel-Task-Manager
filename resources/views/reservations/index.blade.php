@extends('reservations.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Websites for Managing Hotel Reservations</h2>
                    </div>
                    
                    <div class="card-body">
                        <!-- Success Message -->
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <a href="{{ url('/reservation/create') }}" class="btn btn-success btn-sm" title="Add New Reservation">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Reservation
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Hotel Name</th>
                                        <th>Visitor Name</th>
                                        <th>Room Type</th>
                                        <th>Joining Date</th>
                                        <th>Exit Date</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($reservations as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->HotelName_umhr }}</td>
                                        <td>{{ $item->VisitorName_umhr }}</td>
                                        <td>{{ $item->RoomType_umhr }}</td>
                                        <td>{{ $item->RegisteredDate}}</td>
                                        <td>{{ $item->LeavingDate}}</td>
                                        <td>
                                            <a href="{{ url('/reservation/' . $item->id . '/edit') }}" title="Edit Reservation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/reservation' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('Delete') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Reservation" onclick="return confirm(&quot;Do you want to delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
