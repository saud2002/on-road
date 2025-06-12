<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdviceController extends Controller
{
    public function chilsafety(){
        return view('advice_view.childsafety_view');
    }
    public function fatigue(){
        return view('advice_view.fatigue_view');
    }
    public function HowToDrive(){
        return view('advice_view.how_to_drive_view');
    }
    public function preTrip(){
        return view('advice_view.pretrip_view');
    }
}
