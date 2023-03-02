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
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-snapx-photography.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/categories.css')}}" />
</head>

<body>


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{route('mainPage')}}" class="logo">
                            <img src="{{asset('assets/images/BxssWhite.png')}}" alt="Badar Expo Solutions" />
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{route('mainPage')}}">Home</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)" class="active">Our Work</a>
                                <ul class="sub-menu">
                                    @foreach($allCategories as $categoryDetails)
                                    <li><a href="{{$categoryDetails->value}}">{{$categoryDetails->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Events Calender</a>
                                <ul class="sub-menu">
                                    <li><a href="contests.html">Contests</a></li>
                                    <li><a href="contest-details.html">Single Contest</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="categories.html">Categories</a></li> -->
                            <!-- <li><a href="users.html">Venues</a></li> -->
                            <!-- <li><a href="users.html">Webinar</a></li> -->
                            <li class="has-sub">
                                <a href="javascript:void(0)">About</a>
                                <ul class="sub-menu">
                                    <li><a href="contests.html">About Us</a></li>
                                    <li>
                                        <a href="contest-details.html">Leader &amp; Executives</a>
                                    </li>
                                    <li>
                                        <a href="contest-details.html">Badar Engineering Services</a>
                                    </li>
                                    <li><a href="contest-details.html">Work Portfolio</a></li>
                                    <li><a href="contest-details.html">Approach</a></li>
                                    <li>
                                        <a href="contest-details.html">
                                            Why We
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="users.html">Gallery</a></li>
                            <li><a href="users.html">Contact</a></li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div id="modal" class="popupContainer" style="display:none;">
        <div class="popupHeader">
            <span class="header_title">Login</span>
            <span class="modal_close"><i class="fa fa-times"></i></span>
        </div>

        <section class="popupBody">
            <!-- Social Login -->
            <div class="social_login">
                <div class="">
                    <a href="#" class="social_box fb">
                        <span class="icon"><i class="fab fa-facebook"></i></span>
                        <span class="icon_title">Connect with Facebook</span>

                    </a>

                    <a href="#" class="social_box google">
                        <span class="icon"><i class="fab fa-google-plus"></i></span>
                        <span class="icon_title">Connect with Google</span>
                    </a>
                </div>

                <div class="centeredText">
                    <span>Or use your Email address</span>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                    <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
                </div>
            </div>

            <!-- Username & Password Login form -->
            <div class="user_login">
                <form action="" method="post">
                    <label>Email / Username</label>
                    <input name="username" type="text" id="username" />
                    <br />

                    <label>Password</label>
                    <input name="password" type="password" id="password" />
                    <br />

                    <div class="checkbox">
                        <input id="remember" type="checkbox" />
                        <label for="remember">Remember me on this computer</label>
                    </div>

                    <div class="action_btns">
                        <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                        <div class="one_half last"><button type="submit" class="btn btn_red">Login</button></div>
                    </div>
                </form>

                <a href="#" class="forgot_password">Forgot password?</a>
            </div>

            <!-- Register Form -->
            <div class="user_register">
                <form action="" method="post">
                    <label>Username</label>
                    <input name="username" type="text" id="username" />
                    <br />

                    <label>Email Address</label>
                    <input name="email" type="email" id="email" />
                    <br />

                    <label>Password</label>
                    <input name="password" type="password" id="password" />
                    <br />

                    <div class="checkbox">
                        <input id="send_updates" type="checkbox" />
                        <label for="send_updates">Send me occasional email updates</label>
                    </div>

                    <div class="action_btns">
                        <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                        <div class="one_half last"><button type="submit" class="btn btn_red">Register</button></div>
                    </div>
                </form>
            </div>

        </section>
    </div>

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

    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h6>What Clients Say</h6>
                        <h4>What <em>Website</em> Users Are Saying <em>Topics</em></h4>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2">
                    <div class="owl-testimonials owl-carousel">
                        <div class="item">
                            <div class="content">
                                <div class="left-content">
                                    <p>“SnapX Photography is a professional website template for photo and video related businesses. This Bootstrap v5.1.3 HTML CSS template is provided by TemplateMo website.”</p>
                                    <h4>Thomas Wilson</h4>
                                    <span>User #007704</span>
                                </div>
                                <div class="image">
                                    <!-- <img src="assets/images/author.jpg" alt=""> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="content">
                                <div class="left-content">
                                    <p>“You may visit Too CSS website for latest collections of great templates. There are a variety of different categories for HTML CSS templates.”</p>
                                    <h4>John Walker</h4>
                                    <span>User #007772</span>
                                </div>
                                <div class="image">
                                    <!-- <img src="assets/images/author.jpg" alt=""> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="content">
                                <div class="left-content">
                                    <p>“If you need a working contact form, please visit TemplateMo contact page for more information. You can easily buy and use a simple PHP contact form.”</p>
                                    <h4>Vincent Anthon</h4>
                                    <span>User #007794</span>
                                </div>
                                <div class="image">
                                    <!-- <img src="assets/images/author.jpg" alt=""> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="content">
                                <div class="left-content">
                                    <p>“When you need Free CSS Templates, you just remember our website TemplateMo. We provide you best quality website templates at absolutely free of charge. No hidden cost involved.”</p>
                                    <h4>Alan Smithee</h4>
                                    <span>User #007765</span>
                                </div>
                                <div class="image">
                                    <!-- <img src="assets/images/author.jpg" alt=""> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="content">
                                <div class="left-content">
                                    <p>“We hope this template is very useful for your website development. If you wish to <a rel="nofollow" href="https://templatemo.com/contact" target="_blank">support TemplateMo</a>, you may make a small amount of donation via PayPal.”</p>
                                    <h4>Alan Smithee</h4>
                                    <span>User #007724</span>
                                </div>
                                <div class="image">
                                    <!-- <img src="assets/images/author.jpg" alt=""> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="clients">
                        <div class="row">
                            <div class="col-lg-2 col-4">
                                <!-- <img src="assets/images/contest-01.jpg" alt=""> -->
                            </div>
                            <div class="col-lg-2 col-4">
                                <!-- <img src="assets/images/contest-02.jpg" alt=""> -->
                            </div>
                            <div class="col-lg-2 col-4">
                                <!-- <img src="assets/images/contest-01.jpg" alt=""> -->
                            </div>
                            <div class="col-lg-2 col-4">
                                <!-- <img src="assets/images/contest-02.jpg" alt=""> -->
                            </div>
                            <div class="col-lg-2 col-4">
                                <!-- <img src="assets/images/contest-01.jpg" alt=""> -->
                            </div>
                            <div class="col-lg-2 col-4">
                                <!-- <img src="assets/images/contest-02.jpg" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
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