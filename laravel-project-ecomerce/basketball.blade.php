@extends('layout')
       
       @section('content')
       <link rel="stylesheet" href="/style.css">
                        <link rel="img" href="/Pictures">
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                            
                        <div class="mainbox">
                                <div class="container">  
                                    <div class="row"> 
                                    @foreach($adds as $add)
                                                    <div class="col-sm-4 "> 
                                                        <div class="photo width=40%">
                                                        <img src="Pictures/{{$add['Picture']}}">
                                                        </div>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <div style="font-weight: bold">{{$add["Name"]}}</div>
                                                                    <div>{{$add["Category"]}}</div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div style="float: right">
                                                                        <div style="font-weight: 900">${{$add["Price"]}}</div>
                                                                        <div>{{$add["Location"]}}</div>
                                                                    </div>
                                                                </div><br><br>
                                                                <div style="font-style: italic">{{$add["Description"]}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                         @endforeach
                                    </div>
                                                    
                                </div>
                        </div>
        @endsection