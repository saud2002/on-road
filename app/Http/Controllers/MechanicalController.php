<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MechanicalController extends Controller
{
    public function index()
    {
    return view('services.mechanical_view');
}
}