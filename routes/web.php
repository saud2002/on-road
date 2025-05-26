<?php

use App\Http\Controllers\AbeysingheController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KandyController;
use App\Http\Controllers\NimalController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/home',[HomeController::class,'index'])->name('Home.index');

// garages
Route::get('/garages/abeyshinge',[AbeysingheController::class,'index'])->name('Abeysinghe.index');
Route::get('/garages/kandy',[KandyController::class,'index'])->name('Kandy.index');
Route::get('/garages/nimal',[NimalController::class,'index'])->name('Nimal.index');


/* ----------------------------dashboard---------------------------- */
//user
Route::get('/admin/user-create',[AdminController::class,'UserCreate'])->name('Admin.UserCreate');
Route::post('/admin/user-store',[AdminController::class,'UserStore'])->name('Admin.UserStore');
Route::put('/admin/user-edit/{id}',[AdminController::class,'UserEdit'])->name('Admin.UserEdit');
Route::put('/admin/user-update/{id}',[AdminController::class,'UserUpdate'])->name('Admin.UserUpdate');
Route::delete('/admin/{id}',[AdminController::class,'UserDelete'])->name('Admin.UserDelete');
Route::get('/admin/user-list',[AdminController::class,'UserList'])->name('Admin.UserList');

//garages
Route::get('/admin/garage-create',[AdminController::class,'GarageCreate'])->name('Admin.GarageCreate');
Route::post('/admin/garage-store',[AdminController::class,'GarageStore'])->name('Admin.GarageStore');
Route::get('/admin/garage-update',[AdminController::class,'GarageUpdate'])->name('Admin.GarageUpdate');
Route::delete('/admin/{id}',[AdminController::class,'GarageDelete'])->name('Admin.GarageDelete');
Route::get('/admin/garage-list',[AdminController::class,'GarageList'])->name('Admin.GarageList');
/* ---------------------------------------------------------------- */
