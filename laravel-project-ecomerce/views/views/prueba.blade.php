       @extends('layout')
       
       @section('content')
       <div class="flex-container">
            <div>
                    
                                    
                <img src="./foto/" width=100% alt="football"><br>
                <a href="{{ route('web.football') }}" class="link mr-20 color-main">
                FOOTBALL
                </a>
                                    
            </div>
                <div >
                                
                  <img src="./foto/" width=100% alt="watersports"><br>
                  <a href="{{ route('web.basketball') }}" class="link mr-20 color-main">
                BASKETBALL
                </a>         
                </div>
                
        </div><br><br>
        <div class="flex-container">
            <div>
                    
                                    
                <img src="./foto/" width=100% alt="basketball"><br>
                <a href="{{ route('web.cycling') }}" class="link mr-20 color-main">
                CYCLING
                </a>          
            </div>
                <div >
                                
                  <img src="./foto/" width=100% alt="cycling"><br>
                  <a href="{{ route('web.boxing') }}" class="link mr-20 color-main">
                BOXING
                </a>     
                </div>
                
        </div>

       @endsection