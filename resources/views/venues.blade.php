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
                    <x-Navbar active="Venues" :allCategories="$allCategories" />
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div class="page-heading" style="background-image:url('http://badarexpo.com/lib/indexx/img/venue/5.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 header-text">
                    <h2><em>BXSS</em> TOP EVENT VENUES IN PAKISTAN </h2>
                    <p>
                        Every year, Badar Expo Solutions Group organises a number of events across PAKISTAN at some of the most beautiful and exciting venues available. With such an amazing range of venues to choose from, it is difficult to select just a few as our top picks for the year, but someone has to do it. So, here are the Top Events Venues in Pakistan that our event managers particularly enjoyed
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="featured-contests">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h6>Venues</h6>
                        <h4>View Most <em>Popular</em> Category <em>Contests</em></h4>
                    </div>
                </div>
                @foreach($venues as $key=>$venue)
                <div class="col-lg-4 text-center">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{asset('storage/'.$venue->path)}}" alt="">
                            <div class="hover-effect">
                                <div class="content">
                                    <!-- <div class="top-content">
                                        <span class="award">Award Price</span>
                                        <span class="price">$4,100</span>
                                    </div> -->
                                    <h4>{{$venue->name}}</h4>
                                    <!-- <div class="info">
                                        <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>112<br>Participants</span>
                                        <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>286<br>Submissions</span>
                                    </div> -->
                                    <div class="border-button">
                                        @if(strlen($venue->other)>0)
                                        <a href="#">{{$venue->other}}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

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