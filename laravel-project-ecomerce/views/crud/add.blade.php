@extends('crud.layout')
@section('content')

<div class="card">
    <div class="card-header">FreeAds New</div>
    <div class="card-body">
        <form action="{{ url('/Freeads/save') }}" method="post">
            {{!! csrf_field() !!}}
            <label>Title:</label></br>
            <input type="text" id="name" name="title"  value="" class="form-control"></br>
            <label>Price:</label></br>
            <input type="int" id="price" name="price" value="" class="form-control"></br>
            <label>Description:</label></br>
            <input type="text" id="description" name="description" value="" class="form-control"></br>
            <label>Category:</label></br>
            <input type="text" id="category" name="category" value="" class="form-control"></br>
            <label>Location:</label></br>
            <input type="text" id="location" name="location" value="" class="form-control"></br>
            <label>Insert Image:</label></br>
            <input type="text" id="image" name="image" value="" class="form-control"></br>
            <input type="submit" value="save" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop