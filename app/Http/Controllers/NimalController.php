<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NimalController extends Controller
{
    public function index(){
        return view('garages_home.nimal_motors_view');
    }
}
