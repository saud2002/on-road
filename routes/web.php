<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard',function(){
    return view('dashboard_view');
});
// advices
Route::get('/how_to_drive',function(){
    return view('advices.how_to_drive_view');
});
Route::get('/drive_fatigue',function(){
    return view('advices.drive_fatigue_view');
});
Route::get('/child_safety',function(){
    return view('advices.child_safety_view');
});
Route::get('/pre_trip',function(){
    return view('advices.pre_trip_view');
});


// garages 
Route::get('/KEGALLE',[KEGALLEController::class,'index']);
   

Route::get('/KUNDASALE',[KUNDASALEController::class,'index']);
   
   
Route::get('/KANDY',function(){
    return view('garages.KANDY_view');
});
Route::get('/UDAGE',function(){
    return view('garages.UDAGE_view');
});
Route::get('/KANDY_MOTORS',function(){
    return view('garages.KANDY_MOTORS_view');
});
Route::get('/NIMAL',function(){
    return view('garages.NIMAL_view');
});
Route::get('/ABEYSINGHE',function(){
    return view('garages.ABEYSINGHE_view');
});

/// register
Route::get('/register',[RegisterController::class,'index']);

///services 
Route::get('/mechanical',function(){
    return view('services.mechanical_view');
});
Route::get('/electrical',function(){
    return view('services.electrical_view');
});
Route::get('/tire',function(){
    return view('services.tire_view');
});
Route::get('/other_issue',function(){
    return view('services.other_issue_view');
});