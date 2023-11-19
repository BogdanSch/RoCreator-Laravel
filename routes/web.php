<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/games-roblox', function () {
    return view('games-roblox');
});

Route::get('/games-android', function () {
    return view('games-android');
});

Route::get('/software', function () {
    return view('software');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/mail-status', function () {
    return view('mail-status');
});