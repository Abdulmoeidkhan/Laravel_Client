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
                    <h2>Our Approach</h2>
                    <p>
                        Approaching every project with meticulous attention to detail and obsessive precision
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="contest-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <h4>OUR APPROACH</h4>
                        <h6>BXSS has developed systems and a key client-centred approach, which can be applied to any scale of the event, which is derived from our core values of always striving for leadership, respect, empowerment, teamwork and excellence. BXSS has achieved client centred approach by:</h6>
                        <p>
                            Putting your organization first.
                        </p>
                        <p>
                            Investing time with clients.
                        </p>
                        <p>
                            Approaching every project with meticulous attention to detail and obsessive precision.
                        </p>
                        <p>
                            Regardless of size, scope, timeline or budget, we treat each event/project with respect and strive for maximum results.
                        </p>
                        <p>
                            Targeted and effective marketing and communications which complement and enhance your entire event strategy.
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