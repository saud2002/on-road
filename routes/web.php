<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/admin-login', function () {
    return view('pages.admin.admin_login');
});