<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PretripController extends Controller
{
    public function index()
    {
     return view('advices.pre_trip_view');
}
}