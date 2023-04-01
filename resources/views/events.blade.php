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

    <section class="photos-videos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h6>Photos &amp; Videos At SnapX</h6>
                        <h4>Our Featured <em>Photos &amp; Videos</em> At SnapX</h4>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/images/photo-video-01.jpg" alt="">
                            <div class="top-content">
                                <h4>A Walk In Nature</h4>
                                <h6><i class="fa fa-eye"></i> 840 | <i class="fa fa-heart"></i> 160</h6>
                            </div>
                        </div>
                        <div class="down-content">
                            <div class="row">
                                <div class="col-7">
                                    <h2>Ranked: 1st</h2>
                                </div>
                                <div class="col-5">
                                    <h6>Category: Photos</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/images/photo-video-02.jpg" alt="">
                            <div class="play-button">
                                <a href="http://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="top-content">
                                <h4>Blue Mountain Hill</h4>
                                <h6><i class="fa fa-eye"></i> 1722 | <i class="fa fa-heart"></i> 320</h6>
                            </div>
                        </div>
                        <div class="down-content">
                            <div class="row">
                                <div class="col-7">
                                    <h2>Ranked: 2nd</h2>
                                </div>
                                <div class="col-5">
                                    <h6>Category: Videos</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                @foreach($events as $event)
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{asset('storage/events/images/'.$event->imgPath)}}" alt="{{asset('storage/'.$event->imgAlt)}}" width="424px" height="324px">
                            <div class="top-content">
                                <h4>{{$event->name}}</h4>
                                <h6>
                                    {{date("d-M-Y", strtotime(substr_replace($event->doe, "", 10)))}}
                                    <!-- <i class="fa fa-eye"></i> 1436 | <i class="fa fa-heart"></i> 256 -->
                                </h6>
                            </div>
                            <div class="middle-content">
                                <h6><a href="{{$event->eventWebsite}}" target="_blank">{{$event->eventWebsite}}</a></h6>
                            </div>
                        </div>
                        <div class="down-content">
                            <div class="row">
                                <div class="col-12">
                                    <h6 style="text-align:center">{{$event->fullName}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/images/photo-video-04.jpg" alt="">
                            <div class="play-button">
                                <a href="http://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="top-content">
                                <h4>Greeny Place</h4>
                                <h6><i class="fa fa-eye"></i> 1596 | <i class="fa fa-heart"></i> 512</h6>
                            </div>
                        </div>
                        <div class="down-content">
                            <div class="row">
                                <div class="col-7">
                                    <h2>Ranked: 4th</h2>
                                </div>
                                <div class="col-5">
                                    <h6>Category: Videos</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/images/photo-video-05.jpg" alt="">
                            <div class="top-content">
                                <h4>Rocky Mountain</h4>
                                <h6><i class="fa fa-eye"></i> 1596 | <i class="fa fa-heart"></i> 768</h6>
                            </div>
                        </div>
                        <div class="down-content">
                            <div class="row">
                                <div class="col-7">
                                    <h2>Ranked: 5th</h2>
                                </div>
                                <div class="col-5">
                                    <h6>Category: Random</h6>
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