<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrivefatigueController extends Controller
{
     public function index()
    {
    return view('advices.drive_fatigue_view');
}
}