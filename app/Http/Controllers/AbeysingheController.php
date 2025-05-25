<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbeysingheController extends Controller
{
    public function index(){
        return view('garages.abeysinghe_motor_view');
    }
}
