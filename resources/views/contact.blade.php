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
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h6>Contact US</h6>
                        <h4>Don't Be Shy <em></em> to contact the <em>Badar Expo Solutions</em></h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-item">
                        <i class="fa fa-phone"></i>
                        <h4>Phone Numbers</h4>
                        <span>
                            <a href="tel:+922134821179">+92-21-34821179</a>
                            <br>
                            <a href="tel:+922134821159">+92-21-34821159/60</a>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <h4>Email Addresses</h4>
                        <span>
                            <a href="mailto:info@badarexpo.com">
                                info@badarexpo.com
                            </a>
                            <br />
                            <!-- <a href="#">
                                SnapX@company.com
                            </a> -->
                        </span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-item">
                        <i class="fa fa-map-marked"></i>
                        <h4>Office Location</h4>
                        <span><a href="#">C-175, Block-9, Gulshan-e-iqbal,<br>Karachi, Pakistan</a></span>
                    </div>
                </div>
                <div class="col-lg-12">

                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif

                    <form id="contact" method="post" action="{{ route('contactPage.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                                    @if ($errors->has('name'))
                                    <div class="error">
                                        {{ $errors->first('name') }}
                                    </div>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" placeholder="Your Telephone..." autocomplete="on" required>
                                    @if ($errors->has('phone'))
                                    <div class="error">
                                        {{ $errors->first('phone') }}
                                    </div>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="Your E-mail..." required>
                                    @if ($errors->has('email'))
                                    <div class="error">
                                        {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                                    @if ($errors->has('subject'))
                                    <div class="error">
                                        {{ $errors->first('subject') }}
                                    </div>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message" placeholder="Your Message"></textarea>
                                    @if ($errors->has('message'))
                                    <div class="error">
                                        {{ $errors->first('message') }}
                                    </div>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" name="send"  id="form-submit" class="orange-button">Send Message Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
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
</body>

</html>