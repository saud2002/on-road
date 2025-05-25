<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register_view');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|digits:4',
            'license' => 'required',
            'location' => 'required',
            'description' => 'required'
        ]);
        // dd($request);

        Register::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'make' => $request->make,
            'model' => $request->model,
            'year' => $request->year,
            'license' => $request->license,
            'location' => $request->location,
            'description' => $request->description,
        ]);
        return redirect()->route('Register.index');
    }
}
