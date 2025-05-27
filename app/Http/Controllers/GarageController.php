<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('garages.book_list_view',compact('books'));
    }
}
