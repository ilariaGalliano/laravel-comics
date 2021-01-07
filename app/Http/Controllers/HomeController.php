<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get comics list
        $comics = config('comics');
        
        return view('home', compact('comics'));
    }
}
