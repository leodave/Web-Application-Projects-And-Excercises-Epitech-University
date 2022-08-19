<!DOCTYPE html>
<title>FREE ADDS</title>
<link rel="stylesheet" href="/style.css">
<link rel="img" href="/Pictures">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>

    <div class=" bigbox"> 
       <br><br>
            <div class=" menu-4">
                            
                           
                                    <!--<img src="Pictures/logo3.png" alt="Logo"  height: 100px; width: 100px; margin-left: 40%;>-->
                                 
                            <li class="current"><a href="#" data-hover="Home">Home</a></li>
                    

                            <li><a href="#" data-hover="About Us">About Us</a></li>
                            <li><a href="#" data-hover="Products">Products</a></li>
                            <li><a href="#" data-hover="Contact">Contact</a></li> 
                                <li>  <div class="search-box">
                                                <div class="search-icon"><i class="fa fa-search search-icon"></i></div>
                                                <form action="{{ route('web.search') }}" method="GET">
                                                <input type="text" placeholder="Search" name="text" id="search" autocomplete="off">
                                                </form>
                                                <svg class="search-border" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" viewBox="0 0 671 111" style="enable-background:new 0 0 671 111;"
                                                xml:space="preserve">
                                                <path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280"/>
                                                <path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280"/>
                                                </svg>
                                                <div class="go-icon"><i class="fa fa-arrow-right"></i></div>
                                        </div>
                                </li>
                            <li>
                                    <a href="#" data-hover="Login">Login</a>
                            </li>
                            <li>   <a href="#" data-hover="Sign up">Sign up</a></li>
                            </li>   
                            <li>   <a href="#" data-hover="Admin">Admin</a></li>
                            </li>         
                
        </div><br><br>
            

      

        <div class="container">
                        <div class="row menu-4">
                                <div class="col-4 photo">
                                        <img src="Pictures/logo3.png" alt="Logo" >
                                </div>
                                <div class="col-8 ">
                                    <div class="container">
                                            <div class="row">
                                               <h1 class="small" >
                                                Buy, Sell and Trade Your favourite sports Brands
                                                </h1>     
                                            </div>
                                            <div class="row">
                                                    <div class="col-3">
                                                        
                                                    </div>
                                                    <div class="col-3">
                                                            
                                                    </div>
                                                    <div class="col-3">
                                                            
                                                    </div>
                                                    <div class="col-3">
                                                            
                                                    </div>
                                            </div>
                                    </div>
                                        
                                    
                                </div>
                                
                        </div>
                        <dic class="row menu-4">
                                <div class="buttons menu-4" data-aos="fade-down" data-aos-delay="500">
                                        
                                        <div> <a href="{{ route('web.creator') }}" class="link mr-20 color-main">
                                                    press here to sell
                                                    </a>
                                        </div>
                                </div>
                        </div>
    </div>
                   
      
        
     
      
      

    </div>
         
</body>
@yield('content')   