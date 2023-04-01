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
    <link rel="stylesheet" href="{{asset('assets/css/categories.css')}}" />
</head>

<body>


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <x-Navbar active="ourWork" :allCategories="$allCategories" />
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 header-text">
                    <h2>Discover Most Popular Categories on <em>SnapX</em></h2>
                    <p>You are allowed to freely use SnapX Photography Template for your commercial websites. You are not allowed to redistribute the template ZIP file on any other Free CSS websites.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="top-categories">
        <div class="container">
            <div class="row">
                <div class="col-lg col-sm-4">
                    <div class="item">
                        <div class="icon">
                            <!-- <img src="assets/images/icon-01.png" alt=""> -->
                        </div>
                        <h4>Nature Picture</h4>
                        <span>Available Contests</span>
                        <span class="counter">128</span>
                    </div>
                </div>
                <div class="col-lg col-sm-4">
                    <div class="item">
                        <div class="icon">
                            <!-- <img src="assets/images/icon-02.png" alt=""> -->
                        </div>
                        <h4>Space Contest</h4>
                        <span>Available Contests</span>
                        <span class="counter">224</span>
                    </div>
                </div>
                <div class="col-lg col-sm-4">
                    <div class="item">
                        <div class="icon">
                            <!-- <img src="assets/images/icon-03.png" alt=""> -->
                        </div>
                        <h4>Portrait Picture</h4>
                        <span>Available Contests</span>
                        <span class="counter">145</span>
                    </div>
                </div>
                <div class="col-lg col-sm-4">
                    <div class="item">
                        <div class="icon">
                            <!-- <img src="assets/images/icon-04.png" alt=""> -->
                        </div>
                        <h4>Nature Picture</h4>
                        <span>Available Contests</span>
                        <span class="counter">268</span>
                    </div>
                </div>
                <div class="col-lg col-sm-4">
                    <div class="item">
                        <div class="icon">
                            <!-- <img src="assets/images/icon-01.png" alt=""> -->
                        </div>
                        <h4>Space Picture</h4>
                        <span>Available Contests</span>
                        <span class="counter">310</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="featured-contests">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h6>Featured Contests</h6>
                        <h4>View Most <em>Popular</em> Category <em>Contests</em></h4>
                    </div>
                </div>

                <!-- <div class="event-gallery-body">
                    <div class="event-gallery-container">
                        <div class="event-gallery-full-view"></div>
                        <div class="event-gallery-preview-list">
                            <ul class="event-gallery-ul"> -->

                <!-- <li>
                                    <input type="radio" id="tab-key+1" name="gallery-group">
                                    <label for="tab-key+1">
                                        <div class="event-gallery-tab">
                                        </div>
                                    </label>
                                    <div class="event-gallery-content">
                                    </div>
                                </li> -->

                <!-- </ul>
                        </div>
                    </div>
                </div> -->




                <div class="m-p-g">
                    <div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">
                        @foreach($categoriesImages as $key=> $categoriesImage)
                        <img src="{{asset('storage/'.$categoriesImage->filename)}}" data-full="{{asset('storage/'.$categoriesImage->filename)}}" class="m-p-g__thumbs-img" />
                        @endforeach
                    </div>

                    <div class="m-p-g__fullscreen"></div>
                </div>

                <script>
                    var elem = document.querySelector('.m-p-g');

                    document.addEventListener('DOMContentLoaded', function() {
                        var gallery = new MaterialPhotoGallery(elem);
                    });
                </script>


                <!-- <div class="category-gallery-container">
                    @foreach($categoriesImages as $key=> $categoriesImage)
                    <div class="category-gallery-box">
                        <img src="{{asset('storage/'.$categoriesImage->filename)}}" />
                        <span>CSS</span>
                    </div>
                    @endforeach
                </div> -->
                <!-- <div class="col-lg-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/images/featured-image-02.jpg" alt="">
                            <div class="hover-effect">
                                <div class="content">
                                    <div class="top-content">
                                        <span class="award">Award Price</span>
                                        <span class="price">$1,600</span>
                                    </div>
                                    <h4>Walk In The Nature Night</h4>
                                    <div class="info">
                                        <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>60<br>Participants</span>
                                        <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>188<br>Submissions</span>
                                    </div>
                                    <div class="border-button">
                                        <a href="contest-details.html">Browse Nature Contests</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/images/featured-image-01.jpg" alt="">
                            <div class="hover-effect">
                                <div class="content">
                                    <div class="top-content">
                                        <span class="award">Award Price</span>
                                        <span class="price">$3,200</span>
                                    </div>
                                    <h4>Walk In The Nature Night</h4>
                                    <div class="info">
                                        <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>78<br>Participants</span>
                                        <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>240<br>Submissions</span>
                                    </div>
                                    <div class="border-button">
                                        <a href="contest-details.html">Browse Nature Contests</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/images/featured-image-03.jpg" alt="">
                            <div class="hover-effect">
                                <div class="content">
                                    <div class="top-content">
                                        <span class="award">Award Price</span>
                                        <span class="price">$4,100</span>
                                    </div>
                                    <h4>Walk In The Nature Night</h4>
                                    <div class="info">
                                        <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>112<br>Participants</span>
                                        <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>286<br>Submissions</span>
                                    </div>
                                    <div class="border-button">
                                        <a href="contest-details.html">Browse Nature Contests</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/images/featured-image-04.jpg" alt="">
                            <div class="hover-effect">
                                <div class="content">
                                    <div class="top-content">
                                        <span class="award">Award Price</span>
                                        <span class="price">$3,400</span>
                                    </div>
                                    <h4>Walk In The Nature Night</h4>
                                    <div class="info">
                                        <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>54<br>Participants</span>
                                        <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>140<br>Submissions</span>
                                    </div>
                                    <div class="border-button">
                                        <a href="contest-details.html">Browse Nature Contests</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/images/featured-image-05.jpg" alt="">
                            <div class="hover-effect">
                                <div class="content">
                                    <div class="top-content">
                                        <span class="award">Award Price</span>
                                        <span class="price">$2,200</span>
                                    </div>
                                    <h4>Walk In The Nature Night</h4>
                                    <div class="info">
                                        <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>68<br>Participants</span>
                                        <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>162<br>Submissions</span>
                                    </div>
                                    <div class="border-button">
                                        <a href="contest-details.html">Browse Nature Contests</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
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
    <script src="{{asset('assets/js/categories.js')}}"></script>

</body>

</html>