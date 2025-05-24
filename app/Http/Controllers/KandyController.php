<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KandyController extends Controller
{
    public function index(){
       return view('garages.Kandy_view'); 
    } 
}
