<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoCreatorController;

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

Route::get("/", [RoCreatorController::class, "home"])->name("home");

Route::get("/games-roblox", [RoCreatorController::class, "gamesRoblox"])->name("gamesRoblox");

Route::get("/games-android", [RoCreatorController::class, "gamesAndroid"])->name("gamesAndroid");

Route::get("/software", [RoCreatorController::class, "software"])->name("software");

Route::get("/privacy", [RoCreatorController::class, "privacy"])->name("privacy");

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/mail-status', function () {
    return view('mail-status');
})->name('mailStatus');