<?php

namespace App\Http\Controllers;

use App\Models\Freeads;
use Illuminate\Http\Request;

class Advert extends Controller
{
    //
    function showproducts()
    {
    Freeads::where('name', 'Kappu')->update(['price'=>80]);
    //your logic!!
      $prods = Freeads::where('price', '<', 200)->get();

      return view('home', ['products' => $prods]);
    }
    function Advert()
    {
        $ads = Freeads::all();
        return view('ads', ['freeads'=> $ads]);



    }
    function Advert()
    {
        $ads = Freeads::all();
        return view('ads', ['freeads'=> $ads]);
 }
    //
    function updated(Request $req)
    {
        return Freeads::where('title', $req['title'])->update(['title'=>$req['title']],['price'=>$req['price']],['description'=>$req['description']],['category'=>$req['category']],['image'=>$req['image']]);
        //return  $req['delete'];
    }
   
    function delete(Request $req)
   {
    return  $req['delete'];
   }
   function Ad(Request $req)
   {
       $ads = Freeads::where();
       return view('ads', ['freeads'=> $ads]);
    //
   }
}
