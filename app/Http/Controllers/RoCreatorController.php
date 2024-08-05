<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\GamePost;
use App\Models\SoftwarePost;

class RoCreatorController extends Controller
{
    /**
     * @var int
     */
    private const AMOUNT_POSTS_TO_PAGINATE = 4;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gamesQuery = GamePost::query();
        $softwaresQuery = SoftwarePost::query();

        $gamePosts = $gamesQuery->orderBy("created_at", "desc")->paginate(self::AMOUNT_POSTS_TO_PAGINATE)->onEachSide(1);
        $softwarePosts = $softwaresQuery->orderBy("created_at", "desc")->paginate(self::AMOUNT_POSTS_TO_PAGINATE)->onEachSide(1);

        return view("home", ['gamePosts' => $gamePosts, 'softwarePosts' => $softwarePosts]);
    }
    /**
     * Display a listing of the games for roblox resource.
     */
    public function gamesRoblox()
    {
        $gamesQuery = GamePost::query();
        $allRobloxGames = $gamesQuery->where('game_type', 'Roblox')->orderBy("created_at", "desc")->paginate(self::AMOUNT_POSTS_TO_PAGINATE)->onEachSide(1);
        return view("games.games-roblox", ['robloxGamePosts' => $allRobloxGames]);
    }
    /**
     * Display a listing of the games for android resource.
     */
    public function gamesAndroid()
    {
        $gamesQuery = GamePost::query();
        $allAndroidGames = $gamesQuery->where('game_type', 'Android')->orderBy("created_at", "desc")->paginate(self::AMOUNT_POSTS_TO_PAGINATE)->onEachSide(1);
        return view("games.games-android", ['androidGamePosts' => $allAndroidGames]);
    }
    /**
     * Display a listing of the software resource.
     */
    public function software()
    {
        $softwareQuery = SoftwarePost::query();
        $allSoftwarePosts = $softwareQuery->orderBy("created_at", "desc")->paginate(self::AMOUNT_POSTS_TO_PAGINATE)->onEachSide(1);
        return view("software", ['softwarePosts' => $allSoftwarePosts]);
    }
    /**
     * Display the privacy policy page.
     */
    public function privacy()
    {
        return view("privacy");
    }
}
