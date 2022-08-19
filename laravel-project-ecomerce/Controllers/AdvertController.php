<?php

namespace App\Http\Controllers;
use App\Models\Freeads;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Admin;


class AdvertController extends Controller
{
   function indexad()
    { $ads= Freeads::all();
      return view('crud.index', ['ads'=> $ads]);
      //)->with('Freeads' , $ads);
    }
    function myusers()
    { return $this->indexuser();
    }
    function indexuser()
    {
      $use= Users::all();
      return view('usercrud.index', ['use'=> $use]);
      //)->with('Freeads' , $ads);
    }
    function viewad($id)
    {
        $ads=Freeads::Find($id);
        return view('Crud.view', ['ads'=>$ads]);
        //->with('crud', $ads);
    }
    function viewuser($id)
    {
        $user=Users::Find($id);
       //return $user;

        return view('usercrud.view', ['user'=>$user]);
        //->with('crud', $ads);
    }
   function createad()
    {
     return view('crud.add');
    }
   function createuser(){
    return view('usercrud.add');
    }
    function storead(Request $request)
    {
      //$input =$request->input();
      //print_r($input);
      //Freeads::create($input);
      //return view('crud.add', compact('input'));
             $data = $request->input();
          $a = new Freeads;
          $a->title = $data['title'];
          $a->price = $data['price'];
          $a->description = $data['description'];
          $a->category = $data['location'];
          $a->image = $data['image'];
          $a->save();
          $a= Freeads::Where('title',$data['title'])->get();
          return $this->indexad();
          //return view('crud.index', ['ads'=>$a]);
          //return view('crud.view')->with('flash_message', 'Insert successfully');

    }
    function storeuser(Request $request)
    {
      //$input =$request->input();
      //print_r($input);
      //Freeads::create($input);
      //return view('crud.add', compact('input'));
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

    function editad($id)
    {
        $ads= Freeads::Find($id);
        return view('crud.edit', ['ads'=>$ads]);
     }
    function edituser($id)
    {
        $user= Users::Find($id);
        return view('Usercrud.edit', ['user'=>$user]);

    }
    function updatead(Request $request)
    {
        //return $request;

        $data=$request->input();
        $save= Freeads::Find($data['id'])->update($request->input());
        $ads= Freeads::Where('id',$data['id'])->get();
        return $this->indexad();
       // return $ads;return $this->indexad();
       // return view('crud.index', ['ads'=>$ads]);
        //return view('usercrud.index', compact('ads'))->with('flash_message', 'Insert successfully', $ads);
        
        //dd($data);
        //$a = new Freeads;
        //$a->title = $data['title'];
        //$a->price = $data['price'];
        //$a->description = $data['description'];
        //$a->category = $data['location'];
        //$a->image = $data['image'];
        //$a->save();
        //$b=$ads->update($a);
         //$b=update('update  set first_name = ?,last_name=?,city_name=?,email=? where id = ?',[$first_name,$last_name,$city_name,$email,$id]);
       // echo "Record updated successfully.
      //  ";
        // dd("index");
        //return redirect('crud.index', compact('ads'))->with('flash_message', 'Updateds Succesfully!!');
      
    }
    function updateuser(Request $request)
    {
        $data=$request->input();
        $save= Users::find($data['id'])->update($request->input());
        $user= Users::where('id', $data['id'])->get();
        return $this->indexuser();
        //return view('Usercrud.view', compact('user'))->with('flash_message', 'Insert successfully', $user);
    }  
    function destroyad($id)
    {   
    
        $a=Freeads::all()->Find($id);
        $a->delete();
        //$a = Freeads::all();
        return $this->indexad();
        //return view('crud.index',['ads'=>$a]);
    }
    function destroyuser($id)
    {   
    
        $a=Users::all()->Find($id);
        $a->delete();
        return $this->indexuser();
        //$user = Users::all();
    
        //return view('Usercrud.index', compact('user'));
    }
    function viewlogin(){
        return view('login');
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
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
        if (isset($user,$pass))
            return view('welcome');
        else
            return 'no';

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home');

        }else{
            session()->flash('message', 'Invalid credentials');
            return view('register');
            //redirect()->back();
        }
    }
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
            'password' => bcrypt($request->input('password')),
            'phone' => trim($request->input('phone')),
            'nickname' => trim($request->input('nickname')),
        ]);

        session()->flash('message', 'Your account is created');
       
        return view('login'); 
        //redirect()->route('login');
    }
    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login');
    }

    function search(Request $request){

        // Get the search value from the request 
        if(isset($request['text'])) {
            //echo 'get text';
            $search_text = $request['text']; //storing query in search text.
            $products = Freeads::where('Name','LIKE','%'.$search_text.'%')->get(); //retrieve all adds according to the requested query.
            return view('search',['adds'=>$products]);   //returns search view and pass retrieve result into it to display results on search.blade where retrieve adds will be displayed.
        } else{
            return view('search');
            echo "search not found";
        }
      
    }
    function admin(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = Admin::where('name',$request->name)->first();
        $pass = Admin::where('password',$request->password)->first();
         
        if (isset($user,$pass))
        return $this->indexad();
        else
        return view('welcome');
        echo " YOU CAN'T ACCESS THIS PAGE";


        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return view('crud.index');
            redirect()->route('home');

        }else{
            session()->flash('message', 'Invalid credentials');
            return view('welcome');
            //redirect()->back();
        }

    }
    function viewadmin(){
        return view('admin');
    }
}


