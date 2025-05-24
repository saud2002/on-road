<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectricalController extends Controller
{
    public function index()
    {
    return view('services.electrical_view');
}
}