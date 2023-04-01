<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Badar Expo Solution" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="{{asset('assets/images/Badar-icon-16x16.png')}}" rel="icon" type="image/png" sizes="16x16" />
    <link href="{{asset('assets/images/Badar-icon-32x32.png')}}" rel="icon" type="image/png" sizes="32x32" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />

    <title>Badar Expo Solution's</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/template.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/> -->
</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <x-Navbar active="About" :allCategories="$allCategories" />
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 header-text">
                    <h2>Portfolio <em>BXSS</em></h2>
                    <p>Badar Expo Solutions is a full service event management company based in Karachi, Pakistan. Our company was created with the guidance and support of its parent company Badar Engineering Works by pairing together our skill set and passion for business and events.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="user-info" style="margin-top:0px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Categories that we host</h4>
                </div>
                @foreach($categoriesArray as $key => $category)
                <div class="col-lg-2 col-sm-6">
                    <div class="info">
                        <h6>{{$category}}</h6>
                        <h4>{{$categoriesArrayCount[$key]}}</h4>
                        <span>
                            <a href='{{route("categoryPage",["name"=>(str_replace(" ","-",$category))])}}'>
                                {{str_replace(" ","-",$category)}}
                            </a>
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="contest-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <h4>OUR WORK IN OUR PRIDE</h4>
                        <p>
                            Badar Expo is a full service event management company with our Head Office based in Karachi, Pakistan. Our company was created by pairing together our skill set and passion for business and events.
                        </p>
                        <p>
                            If you would like to see more of our work portfolio and relevant case studies please contact us.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2023 <a href="#">Badar Expo Solution</a>, Ltd. All
                        rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/tabs.js')}}"></script>
    <script src="{{asset('assets/js/popup.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>