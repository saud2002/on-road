<?php

namespace App\Http\Controllers;

use App\Models\AdminGarage;
use App\Models\AdminUser;
use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function UserCreate()
    {
        return view('admin.user_create_view');
    }
    public function UserStore(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'nic' => 'required|digits:10|unique:admin_users,nic',
            'gender' => 'required|in:male,female,other',
            'date_of_birth' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|digits:10',
            'location' => 'required',
        ]);
        // dd($request);
        AdminUser::create([
            'full_name' => $request->full_name,
            'nic' => $request->nic,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'location' => $request->location
        ]);
        return redirect()->back()->with('success', 'User Profile Create Success');
    }
    public function UserEdit($id)
    {
        $user = AdminUser::find($id);
        return view('admin.user_update_view', compact('user'));
    }
    public function UserUpdate(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required',
            'nic' => 'required|digits:10|unique:admin_users,nic,' . $id,
            'gender' => 'required|in:male,female,other',
            'date_of_birth' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|digits:10',
            'location' => 'required',
        ]);
        $user = AdminUser::find($id);
        $user->update([
            'full_name' => $request->full_name,
            'nic' => $request->nic,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'location' => $request->location
        ]);
        return redirect()-> route('Admin.UserEdit',compact('user'),$id);
    }
    public function UserDelete($id)
    {
        $user = AdminUser::find($id);
        $user->delete();
        return redirect()->route('Admin.UserList', compact('user'));
    }
    public function UserList()
    {
        $users = AdminUser::all();
        return view('admin.user_list_view', compact('users'));
    }

    /*--------------Garages------------------- */
    public function GarageCreate()
    {
        return view('admin.garage_create_view');
    }
    public function GarageStore(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'nic' => 'required|digits:10|unique:admin_users,nic,',
            'gender' => 'required|in:male,female,other',
            'date_of_birth' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|digits:10',
            'location' => 'required',

        ]);
        AdminGarage::create([
            'full_name' => $request->full_name,
            'nic' => $request->nic,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'location' => $request->location
        ]);
        return redirect()->route('Admin.GarageCreate');
    }
    public function GarageEdit($id)
    {
        $garage = AdminGarage::find($id);
        return view('admin.garage_update_view', compact('garage'));
    }
    public function GarageUpdate(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required',
            'nic' => 'required|digits:10|unique:admin_users,nic,' . $id,
            'gender' => 'required|in:male,female,other',
            'date_of_birth' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|digits:10',
            'location' => 'required',

        ]);

        $garage = AdminGarage::find($id);
        $garage->update([
            'full_name' => $request->full_name,
            'nic' => $request->nic,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'location' => $request->location
        ]);

        return redirect()->route('Admin.GarageEdit', compact('garage'), $id);
    }
    public function GarageDelete($id)
    {
        $garage = AdminGarage::find($id);
        $garage->delete();
        return redirect()->route('Admin.GarageList', compact('garage'));
    }
    public function GarageList()
    {
        $garages = AdminGarage::all();
        return view('admin.garage_list_view', compact('garages'));
    }
    public function booklist()
    {
        $books = Book::all();
        return view('admin.book_list_view', compact('books'));
    }
    public function booklistdelete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('Admin.booklist', compact('book'));
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
}
