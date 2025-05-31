<?php

use App\Http\Controllers\AbeysingheController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdviceController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GarageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IssuesController;
use App\Http\Controllers\KandyController;
use App\Http\Controllers\NimalController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('Home.index');//ok
// advice
Route::get('/advice/child-safety',[AdviceController::class,'chilsafety'])->name('Advice.chilsafety');
Route::get('/advice/fatigue',[AdviceController::class,'fatigue'])->name('Advice.fatigue');
Route::get('/advice/how-to-drive',[AdviceController::class,'HowToDrive'])->name('Advice.HowToDrive');
Route::get('/advice/pre-trip',[AdviceController::class,'preTrip'])->name('Advice.preTrip');
// issues
Route::get('/service/mechanical-issue',[IssuesController::class,'mechanical'])->name('Issues.mechanical');
Route::get('/service/electrical-issue',[IssuesController::class,'electrical'])->name('Issues.electrical');
Route::get('/service/other-issue',[IssuesController::class,'other'])->name('Issues.other');
Route::get('/service/tire-issue',[IssuesController::class,'tire'])->name('Issues.tire');

// garages - home
Route::get('/garages/abeyshinge', [AbeysingheController::class, 'index'])->name('Abeysinghe.index');//ok
Route::get('/garages/kandy', [KandyController::class, 'index'])->name('Kandy.index');//ok
Route::get('/garages/nimal', [NimalController::class, 'index'])->name('Nimal.index');//ok


/* ------------------------Admin dashboard---------------------------- */
//user
Route::get('/admin/user-create', [AdminController::class, 'UserCreate'])->name('Admin.UserCreate');//ok
Route::post('/admin/user-store', [AdminController::class, 'UserStore'])->name('Admin.UserStore');//ok
Route::get('/admin/user-edit/{id}', [AdminController::class, 'UserEdit'])->name('Admin.UserEdit');//ok
Route::put('/admin/user-update/{id}', [AdminController::class, 'UserUpdate'])->name('Admin.UserUpdate');//error
Route::delete('/admin/user-delete/{id}', [AdminController::class, 'UserDelete'])->name('Admin.UserDelete');//ok
Route::get('/admin/user-list', [AdminController::class, 'UserList'])->name('Admin.UserList');//ok

//garages
Route::get('/admin/garage-create', [AdminController::class, 'GarageCreate'])->name('Admin.GarageCreate');//ok
Route::post('/admin/garage-store', [AdminController::class, 'GarageStore'])->name('Admin.GarageStore');//ok
Route::get('/admin/garage-edit/{id}', [AdminController::class, 'GarageEdit'])->name('Admin.GarageEdit');//ok
Route::put('/admin/garage-update/{id}', [AdminController::class, 'GarageUpdate'])->name('Admin.GarageUpdate');//error
Route::delete('/admin/garage-delete/{id}', [AdminController::class, 'GarageDelete'])->name('Admin.GarageDelete');//ok
Route::get('/admin/garage-list', [AdminController::class, 'GarageList'])->name('Admin.GarageList');//ok

//service
Route::get('/admin/book-list', [AdminController::class, 'booklist'])->name('Admin.booklist');//ok
Route::delete('/admin/book-delete/{id}', [AdminController::class, 'booklistdelete'])->name('Admin.booklistdelete');

/* ---------------------------------------------------------------- */

/* ------------------------user dashboard---------------------------- */
Route::get('/user/garage-list', [UserController::class, 'index'])->name('User.index');//ok
Route::get('/user/book', [BookController::class, 'index'])->name('Book.index');//ok
Route::post('/user/book-store', [BookController::class, 'store'])->name('Book.store');//ok
/* ---------------------------------------------------------------- */

/* ------------------------garage dashboard---------------------------- */
Route::get('/garage/book-list', [GarageController::class, 'index'])->name('Garage.index');
/* -------------------------------------------------------------------- */