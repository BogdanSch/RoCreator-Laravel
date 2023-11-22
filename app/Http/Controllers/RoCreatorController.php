<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GamePost;
use App\Models\SoftwarePost;

class RoCreatorController extends Controller
{
    public function home(Request $request)
    {
        return view("home", ['gamePosts' => GamePost::all(), 'softwarePosts' => SoftwarePost::all()]);
    }
    public function gamesRoblox(Request $request)
    {
        return view("gamesRoblox", ['androidGamePosts' => GamePost::all()]);
    }
    public function gamesAndroid(Request $request)
    {
        return view("gamesAndroid", ['androidGamePosts' => GamePost::all()]);
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