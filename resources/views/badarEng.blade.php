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
                    <h2>
                        About
                        <em>Badar Engineering</em>
                    </h2>
                    <p>
                        If you build and showcase it well, they will come and remember it forever
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
                        <h4>BADAR ENGINEERING COMPANY (PVT) LTD</h4>
                        <p>
                            Badar Engineering Works has been operating since 1965, as Electrical, Mechanical & Civil Contractors as well as problem solvers in these fields.
                        </p>
                        <p>
                            Dedicated to being renowned in the field of electrical, mechanical and civil engineering works, Badar Engineering Company has come a long way and grown phenomenally through the years. It enjoys the reputation of being known as amongst one of the dependable engineering/construction companies all over Pakistan. We have achieved this through continuous improvement in the level of expertise of our staff along with the induction of present-day technology. We look forward to amicably solving all related problems and engineering deficiencies encountered in the industry
                        </p>
                        <p>
                            We have an enthusiastic team of very qualified professionals experts in their respective fields. We have evolved as a very flexible organizational structure to suit the specific project needs. Our commitment is to provide services of the highest quality acceptable at international standards with reasonable charges suitable to Pakistan standards.
                        </p>
                        <p>
                            Our existence, over the years, in the fields of electrical, mechanical and civil speaks for itself. As we plan to grow further in the future at a faster pace, we maintain the core objectives of upholding our good name and history that our ancestors earned through sheer hard work and excellence.
                        </p>
                        <p>
                            We stay true and unbiased when it comes to providing our services in the development of this country through our valued customers.
                        </p>
                        <div class="main-button">
                            <a href="#">Visit Our Website</a>
                        </div>
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