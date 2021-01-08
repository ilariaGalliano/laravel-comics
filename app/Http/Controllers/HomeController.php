<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        // Get comics list
        $comics = config('comics');
        
        //Get slugs for comics url (friendly url)
        // how        

        foreach ($comics as $key => $comic) {
            // slug
            $slug = Str::slug( $comic['title'], '-' );
           
            // Add slug 
            $comics[$key]['slug'] = $slug;
        }

        return view('home', compact('comics'));
    }
}
