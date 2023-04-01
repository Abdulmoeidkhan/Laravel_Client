<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

<body class="antialiased">
    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="card">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                    <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link btr" id="pills-password-tab" data-toggle="pill" href="#pills-password" role="tab" aria-controls="pills-password" aria-selected="false">Reset User</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="form px-4 pt-5">
                        <form>
                            <input type="text" name="emailSignIn" class="form-control m-1" placeholder="Email or Phone">
                            <input type="password" name="passSignIn" class="form-control m-1" placeholder="Password" onkeydown="event.key === 'Enter'?signIn():null">
                            <input type="button" class="btn btn-dark btn-block m-1" onclick="signIn()" value="Sign In">
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="form px-4">
                        <form>
                            <input type="numer" name="csrf" class="form-control m-1" placeholder="CSRF">
                            <input type="text" name="name" class="form-control m-1" placeholder="Name">
                            <input type="email" name="email" class="form-control m-1" placeholder="Email">
                            <input type="password" name="pass" class="form-control m-1" placeholder="Password" autocomplete="new-password">
                            <input type="password" name="confirmPass" class="form-control m-1" placeholder="Confirm Password" autocomplete="new-password">
                            <input type="button" class="btn btn-dark btn-block m-1" onclick="signUp()" value="Sign Up">
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab">
                    <div class="form px-4">
                        <form>
                            <input type="email" name="forgotEmail" class="form-control m-1" placeholder="Email">
                            <input type="password" name="forgotPassOld" class="form-control m-1" placeholder="Old Password" autocomplete="new-password">
                            <input type="password" name="forgotPassNew" class="form-control m-1" placeholder="New Password" autocomplete="new-password">
                            <input type="password" name="forgotPassConfirmNew" class="form-control m-1" placeholder="New Password Confirm" autocomplete="new-password">
                            <input type="button" class="btn btn-dark btn-block m-1" onclick="resetPass()" value="Sign Up">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/js/signUp.js') }}"></script>
</body>

</html>