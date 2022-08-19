<?php

namespace App\Http\Controllers;
use App\Models\Adds;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Admin;


class AdvertController extends Controller
{   
//crud products
    //all list products
    function indexad()
    { $ads= Adds::all();
      return view('crud.index', ['ads'=> $ads]);
    }
    //one selected
    function viewad($id)
    {
        $ads=Adds::Find($id);
        return view('crud.view', ['ads'=>$ads]);
    }

    function createad()
    {
     return view('crud.add');
    }

    function storead(Request $request)
    {
             $data = $request->input();
          $a = new Adds;
          $a->Name = $data['Name'];
          $a->Price = $data['Price'];
          $a->Description = $data['Description'];
          $a->Category = $data['Location'];
          $a->Picture = $data['Picture'];
          $a->save();
          $a= Adds::Where('Name',$data['Name'])->get();
          return $this->indexad();
    
    }

    function editad($id)
    {
        $ads= Adds::Find($id);
        return view('crud.edit', ['ads'=>$ads]);
    }
    function destroyad($id)
    {   
    
        $a=Adds::all()->Find($id);
        $a->delete();
        return $this->indexad();
    }
    //save buttom
    function updatead(Request $request)
    {

        $data=$request->input();
        $ad = Adds::where('id', $data['id']);
        $ad->update($request->except(['_token']));
        return $this->indexad();
    }

//crud users
    //all users
    function myusers()
    { return $this->indexuser();
    }

    function indexuser()
    {
      $use= Users::all();
      return view('usercrud.index', ['use'=> $use]);
    
    }
    
    function viewuser($id)
    {
        $user=Users::Find($id);
       
        return view('usercrud.view', ['user'=>$user]);
        
    }
 
   function createuser(){
    return view('usercrud.add');
    }
   
    function storeuser(Request $request)
    {
     
            $data = $request->input();
          $a = new Users;
          $a->name = $data['name'];
          $a->password = $data['password'];
          $a->email = $data['email'];
          $a->phone = $data['phone'];
          $a->nickname = $data['nickname'];
          $a->save();
          $a= Users::where('name', $data['name'])->get();
          return $this->indexuser();
       
    }

 
    function edituser($id)
    {
        $user= Users::Find($id);
        return view('Usercrud.edit', ['user'=>$user]);

    }
  
    function updateuser(Request $request)
    {
        $data=$request->input();
        $save= Users::find($data['id'])->update($request->input());
        $user= Users::where('id', $data['id'])->get();
        return $this->indexuser();
       
    }  
  
    function destroyuser($id)
    {   
    
        $a=Users::all()->Find($id);
        $a->delete();
        return $this->indexuser();
       
    }
//LOGIN
    function viewlogin(){
        return view('login');
    }

    public function process_login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = Users::where('name',$request->name)->first();
        $pass= Users::where('password',$request->password)->first();
        if (isset($credentials))
            return view('home');
        else
            return view('login');

    }
//register
    public function viewregister()
    {
        return view('register');
    }
    public function process_register(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'nickname' => 'required',
        ]);
 
        $user = Users::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')), //bcrypt
            'phone' => trim($request->input('phone')),
            'nickname' => trim($request->input('nickname')),
        ]);

        session()->flash('message', 'Your account is created');
           return view('login'); 
    
    }
    //public function logout(){
        //Auth::logout();

       // return redirect()->route('login'); }
      
    function viewadmin(){
        return view('admin');
    }  
//ADMIN
     function admin(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = Admin::where('name',$request->name)->first();
        $pass = Admin::where('password',$request->password)->first();
    
         
        if (isset($credentials))
        return $this->indexad();
        else
        return view('home');
        echo " YOU CAN'T ACCESS THIS PAGE";

    }
    
}