@extends('layout')
@section('content')


<form method="post" action="{{ url ('postadmin') }}">
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
    <button type="submit" class="btn btn-primary btn-block enter-btn">Admin</button>
  </div>


@endsection