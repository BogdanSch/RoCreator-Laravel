<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function game_roblox()
    {
        $games = Game::all();
        return view('games-roblox', ['games' => $games]);
    }
    public function game_android()
    {
        $games = Game::all();
        return view('games-android', ['games' => $games]);
    }
}
