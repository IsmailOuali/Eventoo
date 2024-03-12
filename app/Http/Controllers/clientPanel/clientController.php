<?php

namespace App\Http\Controllers\clientPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;
use App\Models\Category;
use App\Models\reservation;


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

        return view('client.single', ['event' => $event]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $events = Event::where('name', 'like', "%$search%")->get();

        return view('client.home', ['events' => $events]);
    }

    public function createReservation(Request $request){

        $eventId = $request->route('id');
        $userId = auth()->id();
        
        return view('client.createReservation', ['eventId' => $eventId, 'userId' => $userId]);
    }


    public function storeReservation(Request $request){
    
    $data = $request->validate([
        'client_id' => 'required|numeric',
        'event_id' => 'required|numeric',
    ]);

    $newReservation = Reservation::create($data);
    return redirect(route('client.home'));
}


       
    
    
}
