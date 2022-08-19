<!DOCTYPE html>
<title>FREE ADDS</title>
<link rel="stylesheet" href="/style.css">
<link rel="img" href="/fotos.jpg">


<body>

    <div class=" bigbox">
        <div class=" menu-4">

            <li><a href="#" class="link img_link">
                    <img src="public/fotos.jpg/logoadds.png" alt="Logo" margin-left: 40%;>
                </a>
            </li>
            <li class="current"><a href="#" data-hover="Home">Home</a></li>


            <li><a href="#" data-hover="About Us">About Us</a></li>
            <li><a href="#" data-hover="Products">Products</a></li>
            <li><a href="#" data-hover="Contact">Contact</a></li>

            <li style="margin-left: 40%;">
                <a href="#" class="link mr-20 color-main">
                    Sign In
                </a>
            <li><a href="#" class="btn mr-20 sm action-2 f-16">
                    Sign Up
                </a></li>
            </li>

        </div><br><br>


        <div class="search-box">
            <div class="search-icon"><i class="fa fa-search search-icon"></i></div>
            <form action="{{ route('web.search') }}" method="GET">
                <input type="text" placeholder="Search" name="query" id="search" autocomplete="off">
            </form>
            <svg class="search-border" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" viewBox="0 0 671 111" style="enable-background:new 0 0 671 111;" xml:space="preserve">
                <path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280" />
                <path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280" />
            </svg>
            <div class="go-icon"><i class="fa fa-arrow-right"></i></div>

        </div><br><br>




        @if(isset($adds))

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @if(count($adds) > 0)
                @foreach($adds as $add)
                <tr>
                    <td>{{ $add->Name }}</td>
                    <td>{{ $add->Category }}</td>
                    <td>{{ $add->Description }}</td>
                    <td>{{ $add->Price }}</td>
                    <td>{{ $add->Location }}</td>
                    <td>{{ $add->Picture }}</td>
                </tr>
                @endforeach

                @else

                <tr>
                    <td>No result found!</td>
                </tr>

                @endif
        @endif
    </div>
    </div>
    </div>



    <div class="row menu-4">
        <div class="row">
            <div class="col-xl-8 col-lg-10">
                <h2 class="small" data-aos="fade-down" data-aos-delay="0">
                    Buy, Sell and Trade Top Brands
                </h2>
                <div style="font-family: freeMono, monospace ">
                    <li>it’s fast and easy for you to sell the used sports equipment and fitness gear you’re no longer using.</li>
                    <li>You may never outgrow your favorite sports — but you may outgrow your equipment. </li>

                </div><br><br>
                <div class="buttons" data-aos="fade-down" data-aos-delay="500">

                    <a href="#" class="btn mt-25 mx-15 border-gray color-main">
                        Press here to sell
                    </a>
                </div>
            </div>
        </div>
    </div><br><br><br>
    <br><br>

    <div class="flex-container">
        <div>


            <img src="./foto/" width=100% alt="football"><br>
            FOOTBALL

        </div>
        <div>

            <img src="./foto/" width=100% alt="watersports"><br>
            WATERSPORTS

        </div>

    </div><br><br>
    <div class="flex-container">
        <div>


            <img src="./foto/" width=100% alt="basketball"><br>
            BASKETBALL

        </div>
        <div>

            <img src="./foto/" width=100% alt="cycling"><br>
            CYCLING

        </div>

    </div>




    </div>

</body>