<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserloginController extends Controller
{
    public function index()
    {
    return view('user_login_view');
}
}