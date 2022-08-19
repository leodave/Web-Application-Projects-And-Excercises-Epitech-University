@extends('layout')
@section('content')


<form method="post" action="{{ url ('postlogin') }}">
    @csrf
 <div class="menu-4">   
  <div class="form-group ">
    <label>Name</label>
    <input type="text" name="name" class="form-control p_input">
  </div>
  <div class="form-group ">
    <label>Password </label>
    <input type="password" name="password" class="form-control p_input">
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
  </div>


  <p class="sign-up">Don't have an Account?<a href="{{ url ('viewregister') }}"> Register</a></p>
</form>
</div>
@endsection