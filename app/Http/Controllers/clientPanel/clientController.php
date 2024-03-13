<?php

namespace App\Http\Controllers\clientPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;
use App\Models\Category;
use App\Models\Reservation;
use App\Models\User;


class clientController extends Controller
{
    public function index(Request $request){
        $query = Event::where('approved', true);
        $categories = Category::all();

        if ($request->has('category')) {
            $categoryId = $request->input('category');
            $query->where('category_id', $categoryId);
        }
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title', 'like', "%$search%");
        }
        $events = $query->with('category')->get();

        return view('client.home', compact('events', 'categories'));
    }


    public function single($id){
        $event = Event::find($id);
        $userId = auth()->id();
        
        return view('client.single', ['event' => $event, 'userId' => $userId]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $events = Event::where('name', 'like', "%$search%")->get();

        return view('client.home', ['events' => $events]);
    }

    public function createReservation(Request $request){


    }


    public function storeReservation(Request $request){
    
    $data = $request->validate([
        'client_id' => 'required|numeric',
        'event_id' => 'required|numeric',
    ]);


    $newReservation = Reservation::create($data);
    return redirect(route('client.ticket', ['id' => $newReservation->id]));
    }

    public function generateTicket($id) {
        $reservation = Reservation::findOrFail($id);

        $event_id = $reservation->event_id;
        $client_id = $reservation->client_id;
        $event = Event::findOrFail($event_id);
        $client = User::findOrFail($client_id);

    
        return view('client.ticket', compact('reservation', 'event', 'client'));
    }

    
    
}
