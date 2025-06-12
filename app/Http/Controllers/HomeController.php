<?php

namespace App\Http\Controllers;

use App\Models\AdminGarage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home_view');
    }
}
