<?php

use App\Http\Controllers\AbayasingaController;
use App\Http\Controllers\ChildsafetyController;
use App\Http\Controllers\DrivefatigueController;
use App\Http\Controllers\ElectricalController;
use App\Http\Controllers\FaithController;
use App\Http\Controllers\HowtodriveController;
use App\Http\Controllers\KandyController;
use App\Http\Controllers\KegalleController;
use App\Http\Controllers\MechanicalController;
use App\Http\Controllers\NimalController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\PretripController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TireController;
use App\Http\Controllers\UdageController;
use App\Http\Controllers\UserindexController;
use App\Http\Controllers\UserloginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard',function(){
    return view('dashboard_view');
});

// advices
Route::get('/how_to_drive',[HowtodriveController::class,'index']);
Route::get('/drive_fatigue',[DrivefatigueController::class,'index']);
Route::get('/child_safety',[ChildsafetyController::class,'index']);
Route::get('/pre_trip',[PretripController::class,'index']);

// garages  
Route::get('/Faith',[FaithController::class,'index']);  
Route::get('/Udage',[UdageController::class,'index']);
Route::get('/Kandy',[KandyController::class,'index']);
Route::get('/Nimal',[NimalController::class,'index']);
Route::get('/Abayasinga',[AbayasingaController::class,'index']);
Route::get('/Kegalle',[KegalleController::class,'index']);
    

/// register
Route::get('/register',[RegisterController::class,'index'])->name('Register.index');
Route::post('/register/store',[RegisterController::class,'store'])->name('Register.store');

///user login
Route::get('/user_login',[UserloginController::class,'index']);
    

///user index
Route::get('/user_index',[UserindexController::class,'index']);
    



///services 
Route::get('/mechanical',[MechanicalController::class,'index']);   
Route::get('/electrical',[ElectricalController::class,'index']);   
Route::get('/tire',[TireController::class,'index']);   
Route::get('/other_issue',[OtherController::class,'index']);