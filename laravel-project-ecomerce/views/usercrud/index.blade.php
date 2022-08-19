@extends('usercrud.layout')
@section('content')
   
    <div class ="container">
        <div class="row">

             <div class="col-12">
                 <!-- ELEMENT/ITEM here-->
                 <div class="card">
                     <div class="card-header">
                         <h2>Users</h2>
                     </div>
                     <div class="card-body">
                            <a href="{{ url('/Users/add')}}" class="btn btn-success btn-sm" title="Add">
                               <i class="fa fa-plus" aria-hidden="true"></i>Add New
                            </a>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class= "table">
                                    <thread>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Nickname</th>
                                        

                                        </tr>
                                    </thread>
                                    <tbody>
                                    @foreach($use as $user)
                                         <tr>

                                             <td>{{ $user->id }}--</td>
                                             <td>{{ $user->Name }}</td>
                                             <td>{{ $user->Password }}</td>
                                             <td>{{ $user->Email }}</td>
                                             <td>{{ $user->Phone }}</td>
                                             <td>{{ $user->Nickname }}</td>
                                           
                                                <td>
                                                 <a href="{{ url('/Users/' . $user->id . '/view') }}" title= "view"><button class="btn btn-info btn-sm"><i class= "fa fa-eye"  aria-hidden="true"></i> view</button></a> 
                                                
                                                
                                                    <form method="post" action="{{ route('delete', $user->id) }}" accept-charset="UTF-8" style="display:inline">
                                                          <!-- {{ method_field('Post') }} -->
                                                          {{ csrf_field() }}
                                                          <button type="submit" class="btn btn-danger btn-sm" title="Delete" class="btn btn-info btn-sm"><i class= "fa fa-eye" aria-hidden="true"></i> Delete</button></a>

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

@endsection