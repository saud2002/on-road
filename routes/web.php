<?php

use App\Http\Controllers\AbeysingheController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KandyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/home',[HomeController::class,'index'])->name('Home.index');

// garages
Route::get('/garages/abeyshinge',[AbeysingheController::class,'index'])->name('Abeysinghe.index');
Route::get('/garages/kandy',[KandyController::class,'index'])->name('Kandy.index');
Route::get('/garages/nimal',[KandyController::class,'index'])->name('Nimal.index');