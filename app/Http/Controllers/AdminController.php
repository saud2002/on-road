<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function UserCreate()
    {
        return view('admin.user_create_view');
    }
    public function UserUpdate()
    {
        return view('admin.user_update_view');
    }
    public function UserList()
    {
        return view('admin.user_list_view');
    }
    public function GarageCreate()
    {
        return view('admin.garage_create_view');
    }
    public function GarageUpdate()
    {
        return view('admin.garage_update_view');
    }
    public function GarageList()
    {
        return view('admin.garage_list_view');
    }
}
