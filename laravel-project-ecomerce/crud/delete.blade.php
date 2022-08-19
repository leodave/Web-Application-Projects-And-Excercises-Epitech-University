@foreach($freeads as $ads){
                    
                    <div class = "col-3 card">
                            <img src="images/{{$ads['image'] }}"> 
                            <p class = "prodDesc">{{$ads['title'] }}[</p>
                            <p class ="prodDescB">{{$ads['price'] }}</p>
                            <p class ="prodDescB">{{$ads['description'] }}</p>
                            <p class ="prodDescB">{{$ads['location'] }}
                            <form action="Deleteproduct" method ="post">
                                    {{method-field('Delete') }}
                                    {{csrf_field}}
                                    <label name="Delete">Delete:</label>
                                    <button type="submit" class="btn btn-danger btn-sm" name="delete" value="{{$ads['id'] }}">
                            </form> 
                        </div>
                    </div>
                    @endforeach