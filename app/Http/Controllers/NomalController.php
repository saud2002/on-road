<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NomalController extends Controller
{
    public function index(){
        return view('garages.nimal_motors_view');
    }
}
