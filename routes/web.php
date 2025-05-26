<?php

use App\Http\Controllers\AbeysingheController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KandyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/home',[HomeController::class,'index'])->name('Home.index');

// garages
Route::get('/garages/abeyshinge',[AbeysingheController::class,'index'])->name('Abeysinghe.index');
Route::get('/garages/kandy',[KandyController::class,'index'])->name('Kandy.index');
Route::get('/garages/nimal',[KandyController::class,'index'])->name('Nimal.index');


/* ----------------------------dashboard---------------------------- */
//user
Route::get('/admin/user-create',[AdminController::class,'UserCreate'])->name('Admin.UserCreate');
Route::get('/admin/user-update',[AdminController::class,'UserUpdate'])->name('Admin.UserUpdate');
Route::get('/admin/user-list',[AdminController::class,'UserList'])->name('Admin.UserList');

//garages
Route::get('/admin/garage-create',[AdminController::class,'GarageCreate'])->name('Admin.GarageCreate');
Route::get('/admin/garage-update',[AdminController::class,'GarageUpdate'])->name('Admin.GarageUpdate');
Route::get('/admin/garage-list',[AdminController::class,'GarageList'])->name('Admin.GarageList');
/* ---------------------------------------------------------------- */
