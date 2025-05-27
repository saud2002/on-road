<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('user.book_view');
    }
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required|digits:10',
            'reason' => 'required',
            'location' => 'required',
            'brand' => 'required|in:toyota,bmw,ford,mercedes,honda,tesla,hyundai,mitsubushi,volvo,foton,tata,other',
            'type' => 'required|in:lorry,car,van,truck,three_wheeler,flight,train,motor_cycle,heavy_vechile,other',
            'vechile_number' => 'required|min:7'
        ]);
        // dd($request);
        Book::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'reason' => $request->reason,
            'location' => $request->location,
            'brand' => $request->brand,
            'type' => $request->type,
            'vechile_number' => $request->vechile_number
        ]);
        return redirect()->route('Book.index');
    }
}
