@extends('crud.layout')
@section('content')

<div class= "card">
    <div class ="card-header"> Free Ads </div>
    <div class="card-body">
   
        <div class="card-body">
            <h5 class="card-title">Title:- {{$ads->title}}</h5>
            <p class ="card-text">price:- {{$ads->price}}</p>
            <p class ="card-text">Description:-{{$ads->description}}</p>
            <p class ="card-text">Category:-{{$ads->category}}</p>
            <p class ="card-text">Location:- {{$ads->location}}</p>
            <p class ="card-text">Image:- {{$ads->image}}</p>
        </div>
        <a href="{{ url('Freeads/return')}}" class="btn btn-success btn-sm" title="Add">
                               <i class="fa fa-plus" aria-hidden="true"></i>Return
    </div>
</div>