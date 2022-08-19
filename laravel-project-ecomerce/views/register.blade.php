@extends('layout')
@section('content')

<form method="post" action="{{ url('postregister') }}">
  @csrf
<div class="form-group">
  <label>Name</label>
  <input type="text" name="name" class="form-control p_input">
</div>
<div class="form-group">
  <label>Password</label>
  <input type="password" name="password" class="form-control p_input">
</div>
<div class="form-group">
  <label>Email</label>
  <input type="email" name="email" class="form-control p_input">
</div>
<div class="form-group">
  <label>Phone</label>
  <input type="int" name="phone" class="form-control p_input">
</div>
<div class="form-group">
  <label>Nickname</label>
  <input type="text" name="nickname" class="form-control p_input">
</div>

<div class="text-center">
  <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
</div>

<p class="sign-up text-center">Already have an Account?<a href="{{ url('viewlogin') }}"> Sign In</a></p>
<p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
</form>
@endsection
 