<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TireController extends Controller
{
    public function index()
    {
    return view('services.tire_view');
}
}