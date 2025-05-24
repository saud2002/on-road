<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register_view');
    }
    public Function store(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
    }
}
