<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    public function software()
    {
        $softs = Software::all();
        return view('soft', ['softs' => $softs]);
    }
}
