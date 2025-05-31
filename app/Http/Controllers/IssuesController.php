<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssuesController extends Controller
{
    public function electrical(){
        return view('issues_view.electrical_view');
    }
    public function mechanical(){
        return view('issues_view.mechanical_view');
    }
    public function other(){
        return view('issues_view.other_view');
    }
    public function tire(){
        return view('issues_view.tire_view');
    }
}
