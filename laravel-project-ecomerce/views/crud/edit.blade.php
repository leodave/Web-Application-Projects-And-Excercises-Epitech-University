@extends('crud.layout')
@section('content')

<div class="card">
    <div class="card-header">FreeAds Edit</div>
    <div class="card-body">
        <form action="{{ url( '/Freeads/update') }}" method="post">
             {{ csrf_field() }}
            
            <input type="hidden" name="id" id="id" value="{{$ads->id}}"/>
            <label> Title:</label></br>
            <input type="text" id="title" name="title"  value="{{$ads->title}}" class="form-control"></br>
            <label>Price:</label></br>
            <input type="int" id="price" name="price" value="{{$ads->price}}" class="form-control"></br>
            <label>Description:</label></br>
            <input type="text" id="description" name="description" value="{{$ads->id}}" class="form-control"></br>
            <label>Category:</label></br>
            <input type="text" id="category" name="category" value="{{$ads->category}}" class="form-control"></br>
            <label>Location:</label></br>
            <input type="text" id="location" name="location" value="{{$ads->location}}" class="form-control"></br>
            <label>Insert Image:</label></br>
            <input type="text" id="image" name="image" value="{{$ads->image}}" class="form-control"></br>
            <input type="submit" value="update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop
