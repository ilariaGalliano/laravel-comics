<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
       //public function show($id)
       public function show($slug)
    {
        //return 'detail : ' .$id;

        $comics = config('comics');

        // Get comic by Id
        //$comic = []; 

       /*  foreach ($comics as $item) {
            if($id == $item['id']){
                $comic = $item;
            }
        } */

         // Get specific comic by slug
         $comic = []; 

         foreach ($comics as $item) {
             // title -> slug
             $titleConverted = Str::slug( $item['title'], '-' );
            // decision
             if($slug == $titleConverted) {
                 $comic = $item;
                 break; 
             }
         }
 
         // If comic doesn't exist
         if(empty($comic)){
             abort(404);
         }
 
         return view('comics.show', compact('comic'));
    }
}

