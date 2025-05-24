<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowtodriveController extends Controller
{
     public function index()
    {
    return view('advices.how_to_drive_view');
}
}