<?php

use App\Http\Controllers\ContactsController;
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

Route::get("/", [RoCreatorController::class, "index"])->name("home");

Route::get("/games-roblox", [RoCreatorController::class, "gamesRoblox"])->name("gamesRoblox");

Route::get("/games-android", [RoCreatorController::class, "gamesAndroid"])->name("gamesAndroid");

Route::get("/software", [RoCreatorController::class, "software"])->name("software");

Route::get("/privacy", [RoCreatorController::class, "privacy"])->name("privacy");

Route::get('/contacts', [ContactsController::class, "index"])->name("contacts");

Route::get('/mail-status', [ContactsController::class, "mailStatus"])->name('mailStatus');