<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChildsafetyController extends Controller
{
    public function index()
    {
    return view('advices.child_safety_view');
}
}
