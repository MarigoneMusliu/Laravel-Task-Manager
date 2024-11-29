<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\Reservation;
 
class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view ('reservations.index')->with('reservations', $reservations);
    }
 
    
    public function create()
    {
        return view('reservations.create');
    }
 
   
    public function store(Request $request)
{
    $input = $request->all();
    Reservation::create($input);

    return redirect('reservation')->with('success', 'Reservation added successfully!');
}
 
    
    public function show($id)
    {
        $reservation = Reservation::find($id);
        return view('reservations.show')->with('reservations', $reservation);
    }
 
    
    public function edit($id)
    {
        $reservation = Reservation::find($id);
        return view('reservations.edit')->with('reservations', $reservation);
    }
 
  
   public function update(Request $request, $id)
{
    $reservation = Reservation::find($id);
    $input = $request->all();
    $reservation->update($input);

    return redirect('reservation')->with('success', 'Reservation updated successfully!');
}

 
   
   public function destroy($id)
{
    Reservation::destroy($id);

    return redirect('reservation')->with('success', 'Reservation deleted successfully!');
}
}