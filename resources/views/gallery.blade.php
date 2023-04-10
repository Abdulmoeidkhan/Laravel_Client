<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Portfolio Gallery Filter With Pagination Responsive</title>
    <link rel="stylesheet" href="{{asset('assets/css/gallery.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/template.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/categories.css')}}" />

</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <x-Navbar active="Calender" :allCategories="$allCategories" />
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="header-text">
                        <h2>
                            Pakistan's Premier
                            <!-- <em> -->
                            Events
                            <!-- </em> -->
                            Solution
                            <!-- <em> -->
                            Provider
                            <!-- </em> -->
                        </h2>
                        <p>
                            Badar Expo Solutions is a full service event management company
                            based in Karachi, Pakistan. Our company was created with the
                            guidance and support of its parent company Badar Engineering
                            Works by pairing together our skill set and passion for business
                            and events.
                        </p>
                        <div class="buttons">
                            <div class="big-border-button">
                                <a href="{{route('eventPage', ['name' => 'upComingEvents'])}}">Upcoming Events</a>
                            </div>
                            <div class="icon-button">
                                <a href="https://www.youtube.com/@BadarExpoSolutionsOfficial" target="_blank">
                                    <i class="fa fa-play"></i> Visit Our Youtube Channel Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <div class="filters filter-button-group">
        <ul>
            <li class="active"><a href="javascript:void(0);" data-filter="*">All</a></li>
            <li><a href="javascript:void(0);" data-filter="2023">2023</a></li>
            <li><a href="javascript:void(0);" data-filter="2022">2022</a></li>
            <li><a href="javascript:void(0);" data-filter="2021">2021</a></li>
            <li><a href="javascript:void(0);" data-filter="2020">2020</a></li>
            <li><a href="javascript:void(0);" data-filter="2019">2019</a></li>
        </ul>
    </div>
    <div id="container" class="isotope">

        <div class="grid-item" data-filter="bike">
            <a class="popupimg" href="https://drive.google.com/u/0/uc?id=1WcNDZ4BGtgDsJF7guFJBqdsjOi28sTsk&export=download">
                <img src="https://drive.google.com/u/0/uc?id=1WcNDZ4BGtgDsJF7guFJBqdsjOi28sTsk&export=download">
            </a>
            <div class="overlay">Bike</div>
        </div>


    </div>

    <div class="isotope-pager" style="padding-top: 15px; text-align:center;">
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

    <!-- partial -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js'></script>
    <script src="{{asset('assets/js/gallery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/signout.js')}}"></script>

</body>

</html>