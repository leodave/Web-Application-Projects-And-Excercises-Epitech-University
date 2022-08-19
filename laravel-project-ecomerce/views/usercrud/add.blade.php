@extends('usercrud.layout')
@section('content')

<div class="card">
    <div class="card-header">FreeAds New</div>
    <div class="card-body">
        <form action="{{ url('/Users/save') }}" method="post">
            {{!! csrf_field() !!}}
            <label>Name:</label></br>
            <input type="text" id="name" name="name"  value="" class="form-control"></br>
            <label>Password:</label></br>
            <input type="password" id="password" name="password" value="" class="form-control"></br>
            <label>Email:</label></br>
            <input type="text" id="email" name="email" value="" class="form-control"></br>
            <label>Phone:</label></br>
            <input type="int" id="phone" name="phone" value="" class="form-control"></br>
            <label>Nickname:</label></br>
            <input type="text" id="nickname" name="nickname" value="" class="form-control"></br>

            <input type="submit" value="save" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop