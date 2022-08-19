@extends('usercrud.layout')
@section('content')

<div class="card">
    <div class="card-header">FreeAds Edit</div>
    <div class="card-body">
        <form action="{{ url( '/Users/update') }}" method="post">
             {{ csrf_field() }}
            
            <input type="hidden" name="id" id="id" value="{{$user->id}}"/>
            <label> Name:</label></br>
            <input type="text" id="title" name="title"  value="{{$user->Name}}" class="form-control"></br>
            <label>Password:</label></br>
            <input type="password" id="password" name="password" value="{{$user->Password}}" class="form-control"></br>
            <label>Email:</label></br>
            <input type="text" id="email" name="email" value="{{$user->Email}}" class="form-control"></br>
            <label>Phone:</label></br>
            <input type="int" id="phone" name="phone" value="{{$user->Phone}}" class="form-control"></br>
            <label>Nickname:</label></br>
            <input type="text" id="nickname" name="nickname" value="{{$user->Nickname}}" class="form-control"></br>
          
            <input type="submit" value="update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop
