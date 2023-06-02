<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Software;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $games = Game::all();
        $softs = Software::all();
        return view('index', compact('games', 'softs'));
    } 
}
