@extends('crud.layout')
@section('content')

<div class="card">
    <div class="card-header">FreeAds Edit</div>
    <div class="card-body">
        <form action="{{ url('crud' .$crud->id) }}" method="post">
             {{ csrf_field() }}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$crud->id}}" id="id"/>
            <label> Title:</label></br>
            <input type="text" id="name" name="name"  value="{{$crud->title}}" class="form-control"></br>
            <label>Price:</label></br>
            <input type="int" id="price" name="price" value="{{$crud->price}}" class="form-control"></br>
            <label>Description:</label></br>
            <input type="text" id="description" name="description" value="{{$crud->id}}" class="form-control"></br>
            <label>Category:</label></br>
            <input type="text" id="category" name="category" value="{{$crud->category}}" class="form-control"></br>
            <label>Location:</label></br>
            <input type="text" id="location" name="location" value="{{$crud->location}}" class="form-control"></br>
            <label>Insert Image:</label></br>
            <input type="text" id="image" name="image" value="{{$crud->image}}" class="form-control"></br>
            <input type="submit" value="update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop