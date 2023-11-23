<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\GamePost;
use App\Models\SoftwarePost;

class RoCreatorController extends Controller
{
    public function home(Request $request)
    {
        $allSoftwarePosts = SoftwarePost::take(4)->get();
        $allGamePosts = GamePost::take(4)->get();
        
        // Log::info(json_encode($allSoftwarePosts)); 
        // Log::info(json_encode($allGamePosts)); 
        return view("home", ['gamePosts' => $allGamePosts, 'softwarePosts' => $allSoftwarePosts]);
    }
    public function gamesRoblox(Request $request)
    {
        return view("games-roblox", ['androidGamePosts' => GamePost::all()]);
    }
    public function gamesAndroid(Request $request)
    {
        return view("games-android", ['androidGamePosts' => GamePost::all()]);
    }
    public function software(Request $request)
    {
        return view("software", ['softwarePosts' => SoftwarePost::all()]);
    }
    public function privacy(Request $request)
    {
        return view("privacy");
    }
}