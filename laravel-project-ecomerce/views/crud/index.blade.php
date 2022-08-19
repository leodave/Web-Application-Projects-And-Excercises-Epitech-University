@extends('crud.layout')
@section('content')
    <div class ="container">
        <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header">
                         <h2>FreeAds</h2>
                     </div>
                     <div class="card-body">
                            <a href="{{ url('/Freeads/add')}}" class="btn btn-success btn-sm" title="Add">
                               <i class="fa fa-plus" aria-hidden="true"></i>Add New
                            </a>
                            <a href="{{ url('myuser')}}" class="btn btn-success btn-sm" title="myusers">
                               <i class="fa fa-plus" aria-hidden="true"></i>My Users
                            </a>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class= "table">
                                    <thread>
                                        <tr>
                                           
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Location</th>
                                            <th>image</th>

                                        </tr>
                                    </thread>
                                    <tbody>
                                    @foreach($ads as $freeads)
                                         <tr>

                                             <td>{{ $freeads->id }}--</td>
                                             <td>{{ $freeads->title }}</td>
                                             <td>{{ $freeads->price }}</td>
                                             <td>{{ $freeads->description }}</td>
                                             <td>{{ $freeads->category }}</td>
                                             <td>{{ $freeads->location }}</td>
                                             <td>{{ $freeads->image }}</td>
                                             <td><img src="{{asset('images/' . $freeads['image'])}}"></td>

                                             <td>
                                                 <a href="{{ url('/Freeads/' . $freeads->id . '/view') }}" title= "view"><button class="btn btn-info btn-sm"><i class= "fa fa-eye" aria-hidden="true"></i> view</button></a>
                                                 <a href="{{ url('/Freeads/' . $freeads->id . '/edit') }}" title= "Edit"><button class="btn btn-primary btn-sm"><i class= "fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                 <!-- <a href="{{ url('/Freeads/' . $freeads->id) }}" title= "delete"><button class="btn btn-danger btn-sm"><i class= "fa fa-eye" aria-hidden="true"></i> Delete</button></a>
                                                    <form method="delete" action="{{url('/Freeads/' . '/' . $freeads->id) }}" accept-charset="UTF-8" style="display:inline">
                                                          {{ method_field('Delete') }}
                                                          {{ csrf_field() }}
                                                          <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick= "return confirm(&quot;confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>

                                                    </form> -->
                                                    <form method="post" action="{{ route('del', $freeads->id) }}" accept-charset="UTF-8" style="display:inline">
                                                          <!-- {{ method_field('Post') }} -->
                                                          {{ csrf_field() }}
                                                          <button type="submit" class="btn btn-danger btn-sm" title="Del" class="btn btn-info btn-sm"><i class= "fa fa-eye" aria-hidden="true"></i> Delete</button></a>

                                                    </form>
                                             </td>
                                             
                                             
                                         </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                             

                     </div>
                 </div>
             </div>
    </div>

