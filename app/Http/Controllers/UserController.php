<?php

namespace App\Http\Controllers;

use App\Models\AdminGarage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $garages = AdminGarage::all();
        return view('user.garage_list_view',compact('garages'));
    }
    public function dashboard(){
        return view('user.dashboard');
    }
}
