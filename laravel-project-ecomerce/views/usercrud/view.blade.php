@extends('usercrud.layout')
@section('content')

<div class= "card">
    <div class ="card-header"> Users </div>
    <div class="card-body">
   
        <div class="card-body">
            <h5 class="card-title">Name:- {{$user->Name}}</h5>
            <p class ="card-text">password:- {{$user->Password}}</p>
            <p class ="card-text">Email:-{{$user->Email}}</p>
            <p class ="card-text">Phone:-{{$user->Phone}}</p>
            <p class ="card-text">Nickname:- {{$user->Nickname}}</p>
        </div>
        <a href="{{ url('Users/return')}}" class="btn btn-success btn-sm" title="Add">
                               <i class="fa fa-plus" aria-hidden="true"></i>Return
    </div>
</div>
@endsection