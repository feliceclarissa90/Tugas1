<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('education', function () {
    return view('education');
});

Route::get('experience', function () {
    return view('experience');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('lihatkrs', function () {
    return view('lihatkrs');
});

Route::get('lihatkhs', function () {
    return view('lihatkhs');
});

Route::get('footer', function () {
    return yield('footer');
});

Route::get('/admin', function() {
    return view('admin');
});