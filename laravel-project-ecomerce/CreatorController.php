<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adds;

class CreatorController extends Controller
{
    //press "start sell now"
    function createad(){
      
        return view('creator');
    }


    //save new add
    function storead(Request $request){

        $data = $request->input();
        $a = new Adds();
        $a->name = $data['name'];
        $a->category = $data['category'];
        $a->description = $data['description'];
        $a->location = $data['location'];
        $a->picture = $data['picture'];
        $a->save();
        $a= Adds::Where('name',$data['name'])->get();


        return view('prueba');
    }

    // category
    function football(){

        $a= Adds::where('category','football')->get();
        
        return view('football', ['adds'=>$a]);
       
    }
    function basketball(){

        $a= Adds::where('category','basketball')->get();
      
        return view('basketball', ['adds'=>$a]);
    }
    function cycling(){

        $a= Adds::where('category','cycling')->get();
      
        return view('cycling', ['adds'=>$a]);
    }
    function boxing(){

        $a= Adds::where('category','boxing')->get();
      
        return view('boxing', ['adds'=>$a]);
    }



}
