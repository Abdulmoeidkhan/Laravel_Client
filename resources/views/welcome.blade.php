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
                    <x-Navbar active="home" :allCategories="$allCategories" />
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

    <section class="featured-items" id="featured-items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-features owl-carousel" style="position: relative; z-index: 5" id="upcomingEvents">
                        @foreach($futureEvents as $key=>$event)
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset('storage/events/images/'.$event['imgPath'])}}" alt="{{$event['imgAlt']}}" width="420px" height="280px" />
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>
                                            {{$event['name']}}
                                            <!-- <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span> -->
                                        </h4>
                                        <ul>
                                            @if(strlen($event['fullName'])>5)
                                            <li><span>Event Name : </span>{{$event['fullName']}}</li>
                                            @endif
                                            @if(strlen($event['aboutEve'])>5)
                                            <li><span>About Event : </span>{{$event['aboutEve']}}</li>
                                            @endif
                                            @if(strlen($event['eventWebsite'])>5)
                                            <li><span>Website : </span><a href="{{$event['eventWebsite']}}" target="_blank">{{$event['eventWebsite']}}</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="item">
                            <div class="thumb">
                                <img src="assets/images/featured-01.jpg" alt="" />
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>
                                            Walk In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span>
                                        </h4>
                                        <ul>
                                            <li><span>Contest Winner:</span> Vincent Adam</li>
                                            <li><span>Contest Author:</span> Anthony Soft</li>
                                            <li><span>Awards:</span> $1.000 + Camera Nikon</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/featured-02.jpg" alt="" />
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>
                                            Smile In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            <span>(4.5)</span>
                                        </h4>
                                        <ul>
                                            <li><span>Contest Winner:</span> Thomas Eddy</li>
                                            <li><span>Contest Author:</span> Anthony Soft</li>
                                            <li><span>Awards:</span> $1,200 + Canon EOS R7</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/featured-03.jpg" alt="" />
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>
                                            Happy In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span>
                                        </h4>
                                        <ul>
                                            <li><span>Contest Winner:</span> Vincent Adam</li>
                                            <li><span>Contest Author:</span> Anthony Soft</li>
                                            <li><span>Awards:</span> $1,800 + Canon EOS R6</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/featured-01.jpg" alt="" />
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>
                                            Walk In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            <span>(4.5)</span>
                                        </h4>
                                        <ul>
                                            <li><span>Contest Winner:</span> Thomas Eddy</li>
                                            <li><span>Contest Author:</span> Anthony Soft</li>
                                            <li><span>Awards:</span> $8,400 + Canon EOS R1</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/featured-02.jpg" alt="" />
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>
                                            Run In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span>
                                        </h4>
                                        <ul>
                                            <li><span>Contest Winner:</span> Vincent Adam</li>
                                            <li><span>Contest Author:</span> Anthony Soft</li>
                                            <li><span>Awards:</span> $5,500 + Canon EOS R3</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/featured-03.jpg" alt="" />
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>
                                            Stay In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            <span>(4.5)</span>
                                        </h4>
                                        <ul>
                                            <li><span>Contest Winner:</span> Thomas Eddy</li>
                                            <li><span>Contest Author:</span> Anthony Soft</li>
                                            <li><span>Awards:</span> $4,400 + Canon EOS R5</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/featured-01.jpg" alt="" />
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>
                                            Walk In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            <span>(4.5)</span>
                                        </h4>
                                        <ul>
                                            <li><span>Contest Winner:</span> Vincent Adam</li>
                                            <li><span>Contest Author:</span> Anthony Soft</li>
                                            <li><span>Awards:</span> $3,800 + Canon EOS R6</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/featured-02.jpg" alt="" />
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>
                                            Shoot In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            <span>(4.5)</span>
                                        </h4>
                                        <ul>
                                            <li><span>Contest Winner:</span> Vincent Adam</li>
                                            <li><span>Contest Author:</span> Anthony Soft</li>
                                            <li><span>Awards:</span> $2,400 + Canon EOS R7</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/featured-03.jpg" alt="" />
                                <div class="hover-effect">
                                    <div class="content">
                                        <h4>
                                            Fly In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            <span>(4.5)</span>
                                        </h4>
                                        <ul>
                                            <li><span>Contest Winner:</span> Vincent Adam</li>
                                            <li><span>Contest Author:</span> Anthony Soft</li>
                                            <li><span>Awards:</span> $1,200 + Canon EOS R10</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>Our Event Categories</h6>
                        <h4>Check Out <em>Major</em> Event <em>Categories</em></h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- <div class="main-button">
                        <a href="categories.html">Discover All Categories</a>
                    </div> -->
                </div>

                @for($i=0;$i<(count($categoriesArray));$i++) <div class="col-lg-3 col-sm-6">
                    <div class="popular-item">
                        <div class="top-content">
                            <div class="icon">
                                <!-- <img src="assets/images/icon-01.png" alt="" /> -->
                                <!-- <img src="{{asset('storage/evnetsCategories/Canopy-and-Octanorm-Building/images/Canopy-and-Octanorm-Building-0.PNG')}}" alt="alt text" />
                                <img src="{{asset('storage/eventsCategories/Canopy-and-Octanorm-Building/images/Canopy-and-Octanorm-Building-0.PNG')}}" alt="alt text" />-->
                                <img src="{{asset('storage/'.$categoriesImage[$i])}}" alt="{{$categoriesArray[$i]}}" width="36px" height="35px" />
                            </div>
                            <div class="right">
                                <h4>{{$categoriesArray[$i]}}</h4>
                                <span><em>{{$categoriesArrayCount[$i]}}</em> Available Pictures</span>
                            </div>
                        </div>
                        <div class="thumb">
                            <!-- <img src="assets/images/popular-01.png" alt="" /> -->
                            <img src="{{asset('storage/'.$categoriesImage[$i])}}" alt="{{$categoriesArray[$i]}}" width="283px" height="207px" />
                            <!-- <span class="category">Top Contest</span>
                            <span class="likes"><i class="fa fa-heart"></i> 256</span> -->
                        </div>
                        <div class="border-button">
                            <a href="{{route('categoryPage',['name'=> str_replace(' ','-',$categoriesArray[$i])])}}">View All</a>
                        </div>
                    </div>
            </div>
            @endfor


            <!-- <div class="col-lg-3 col-sm-6">
                <div class="popular-item">
                    <div class="top-content">
                        <div class="icon"> -->
            <!-- <img src="assets/images/icon-01.png" alt="" /> -->
            <!-- <img src="{{asset('storage/eventsCategories/Canopy-and-Octanorm-Building/images/Canopy-and-Octanorm-Building-0.PNG')}}" alt="alt text" />
                        </div>
                        <div class="right">
                            <h4>Nature Pic Contest</h4>
                            <span><em>126</em> Available Contests</span>
                        </div>
                    </div>
                    <div class="thumb"> -->
            <!-- <img src="assets/images/popular-01.png" alt="" /> -->
            <!-- <img src="{{asset('storage/eventsCategories/Canopy-and-Octanorm-Building/images/Canopy-and-Octanorm-Building-0.PNG')}}" alt="alt text" />
                        <span class="category">Top Contest</span>
                        <span class="likes"><i class="fa fa-heart"></i> 256</span>
                    </div>
                    <div class="border-button">
                        <a href="contest-details.html">Browse Nature Pic Contests</a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-3 col-sm-6">
                <div class="popular-item">
                    <div class="top-content">
                        <div class="icon">
                            <img src="assets/images/icon-02.png" alt="" />
                        </div>
                        <div class="right">
                            <h4>Random Pic Contest</h4>
                            <span><em>116</em> Available Contests</span>
                        </div>
                    </div>
                    <div class="thumb">
                        <img src="assets/images/popular-02.png" alt="" />
                        <span class="category">Top Contest</span>
                        <span class="likes"><i class="fa fa-heart"></i> 256</span>
                    </div>
                    <div class="border-button">
                        <a href="contest-details.html">Browse Random Pic Contests</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="popular-item">
                    <div class="top-content">
                        <div class="icon">
                            <img src="assets/images/icon-03.png" alt="" />
                        </div>
                        <div class="right">
                            <h4>Portrait Pic Contest</h4>
                            <span><em>164</em> Available Contests</span>
                        </div>
                    </div>
                    <div class="thumb">
                        <img src="assets/images/popular-03.png" alt="" />
                        <span class="category">Top Contest</span>
                        <span class="likes"><i class="fa fa-heart"></i> 256</span>
                    </div>
                    <div class="border-button">
                        <a href="contest-details.html">Browse Portrait Pic Contests</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="popular-item">
                    <div class="top-content">
                        <div class="icon">
                            <img src="assets/images/icon-04.png" alt="" />
                        </div>
                        <div class="right">
                            <h4>Space Pic Contest</h4>
                            <span><em>135</em> Available Contests</span>
                        </div>
                    </div>
                    <div class="thumb">
                        <img src="assets/images/popular-04.png" alt="" />
                        <span class="category">Top Contest</span>
                        <span class="likes"><i class="fa fa-heart"></i> 256</span>
                    </div>
                    <div class="border-button">
                        <a href="contest-details.html">Browse Space Pic Contests</a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <section class="closed-contests">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h6>Past Events</h6>
                        <h4>
                            <em>Previous Events</em> with BXSS <em></em>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-features owl-carousel" style="position: relative; z-index: 5">
                        @foreach($pastEvents as $pastEvent)
                        <div class="item">
                            <div class="closed-item">
                                <div class="thumb">
                                    <img src="{{asset('storage/events/images/'.$pastEvent['imgPath'])}}" alt="{{$pastEvent['imgAlt']}}" />
                                    <span class="winner"><em>Event Website:</em> {{$pastEvent['eventWebsite']}}</span>
                                    <!-- <span class="price"><em>Website :</em> {{$pastEvent['eventWebsite']}}</span> -->
                                </div>
                                <div class="down-content">
                                    <div class="row">
                                        <div class="col-7">
                                            <h4>
                                                {{$pastEvent['name']}} <br /><span>{{$pastEvent['fullName']}}</span>
                                            </h4>
                                        </div>
                                        <div class="col-5">
                                            <h4 class="pics">
                                                {{$pastEvent['doe']}} <br /><span>{{$pastEvent['VenueEve']}}</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="item">
                            <div class="closed-item">
                                <div class="thumb">
                                    <img src="assets/images/closed-02.jpg" alt="" />
                                    <span class="winner"><em>Winner:</em> Anthony Soft</span>
                                    <span class="price"><em>Award :</em> $4,200</span>
                                </div>
                                <div class="down-content">
                                    <div class="row">
                                        <div class="col-7">
                                            <h4>
                                                96 Participants <br /><span>Number Of Artists</span>
                                            </h4>
                                        </div>
                                        <div class="col-5">
                                            <h4 class="pics">
                                                410 Pictures <br /><span>Submited Pics</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="closed-item">
                                <div class="thumb">
                                    <img src="assets/images/closed-03.jpg" alt="" />
                                    <span class="winner"><em>Winner:</em> Anthony Soft</span>
                                    <span class="price"><em>Award :</em> $3,200</span>
                                </div>
                                <div class="down-content">
                                    <div class="row">
                                        <div class="col-7">
                                            <h4>
                                                74 Participants <br /><span>Number Of Artists</span>
                                            </h4>
                                        </div>
                                        <div class="col-5">
                                            <h4 class="pics">
                                                284 Pictures <br /><span>Submited Pics</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="border-button text-center">
                        <a href="{{route('eventPage', ['name' => 'pastEvents'])}}">Show All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="pricing-plans">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h6>Our Pricing</h6>
                        <h4>
                            Photography <em>Contest Plans</em> and Price <em>Awards</em>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-item">
                        <img src="assets/images/pricing-01.jpg" alt="" />
                        <h4>Basic Plan</h4>
                        <ul class="first-plan">
                            <li>Lorem Ipsum Dolores Sonte</li>
                            <li>Songe Lorem Ipsum Dol</li>
                            <li>Matrios Venga Heptuss</li>
                            <li>Denim Sriracha Kogi</li>
                            <li>Digital Photography Awards</li>
                        </ul>
                        <span class="price">$25 USD</span>
                        <div class="border-button">
                            <a href="#">Choose This Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-item">
                        <img src="assets/images/pricing-02.jpg" alt="" />
                        <h4>Standard Plan</h4>
                        <ul class="second-plan">
                            <li>Lorem Ipsum Dolores Sonte</li>
                            <li>Songe Lorem Ipsum Dol</li>
                            <li>Matrios Venga Heptuss</li>
                            <li>Denim Sriracha Kogi</li>
                            <li>Digital Photography Awards</li>
                        </ul>
                        <span class="price">$45 USD</span>
                        <div class="border-button">
                            <a href="#">Choose This Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-item">
                        <img src="assets/images/pricing-03.jpg" alt="" />
                        <h4>Advanced Plan</h4>
                        <ul class="third-plan">
                            <li>Lorem Ipsum Dolores Sonte</li>
                            <li>Songe Lorem Ipsum Dol</li>
                            <li>Matrios Venga Heptuss</li>
                            <li>Denim Sriracha Kogi</li>
                            <li>Digital Photography Awards</li>
                        </ul>
                        <span class="price">$85 USD</span>
                        <div class="border-button">
                            <a href="#">Choose This Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

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