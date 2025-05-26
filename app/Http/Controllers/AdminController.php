<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function UserCreate(){
        return view('admin.user_create_view');
    }
}
