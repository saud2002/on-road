<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/home',[HomeController::class,'index'])->name('Home.index');