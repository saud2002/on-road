<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllgaragesController extends Controller
{
    public function index(){
       return view('garages_home.All_garages_view');
    }
}
