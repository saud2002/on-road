<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
     public function index()
    {
   return view('services.other_issue_view');
}
}