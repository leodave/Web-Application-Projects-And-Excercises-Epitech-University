<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adds;

class SearchController extends Controller
{
    function search(Request $request){



        // Get the search value from the request 
        if(isset($request['text'])) {
            //echo 'get text';

            $search_text = $request['text']; //storing query in search text.
            $products = Adds::where('Name','LIKE','%'.$search_text.'%')->get(); //retrieve all adds according to the requested query.
            return view('search',['adds'=>$products]);   //returns search view and pass retrieve result into it to display results on search.blade where retrieve adds will be displayed.
        } else{
            return view('search');

        }
      
    }
}
