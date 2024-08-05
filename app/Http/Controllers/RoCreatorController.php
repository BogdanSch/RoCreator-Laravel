<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\GamePost;
use App\Models\SoftwarePost;

class RoCreatorController extends Controller
{
    public function index()
    {
        $softwarePosts = SoftwarePost::take(4)->get();
        $gamePosts = GamePost::take(4)->get();

        return view("home", ['gamePosts' => $gamePosts, 'softwarePosts' => $softwarePosts]);
    }
    public function gamesRoblox()
    {
        $allRobloxGames = GamePost::where('game_type', 'Roblox')->get();
        return view("games.games-roblox", ['robloxGamePosts' => $allRobloxGames]);
    }
    public function gamesAndroid()
    {
        $allAndroidGames = GamePost::where('game_type', 'Android')->get();
        return view("games.games-android", ['androidGamePosts' => $allAndroidGames]);
    }
    public function software()
    {
        $allSoftwarePosts = SoftwarePost::all();
        return view("software", ['softwarePosts' => $allSoftwarePosts]);
    }
    public function privacy()
    {
        return view("privacy");
    }
}
