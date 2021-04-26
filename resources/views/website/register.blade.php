<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <style>
        .error_msg,.x-hidden {
            display: none;
        }
    </style>
</head>
<body>

<section class="bg-section">
    <div class="container">
        <div class="site-logo">
            <img src="{{asset('assets/img/Full_Color_White_logo.png')}}" class="logo-1" alt="logo"> <br>
            <img src="{{asset('assets/img/fs-signin-logo.png')}}" class="logo-2" alt="logo">
        </div><!-- /.site-logo -->
        <div class="row justify-content-center  mt-4">
            <div class="col-lg-5 col-md-6">
                <div class="innner-con">
                    <h1 class="main-title"> The power is in your hands. </h1><!-- /.main-title -->
                    <p class="sub-title mt-4"> A little more conversation, a little less aggravation! Amazing
                        support. </p><!-- /.sub-title -->
                    <p class="sub-title mt-4"> Tired of being unfairly targeted, bullied, or penalized by big tech
                        social networks? Join now to
                        freely express yourself. </p>
                    <div class="btn-con mt-5">
                        <a href="#" class="app-store-btn mr-2"> <i class="fab fa-apple" aria-hidden="true"></i> App
                            Store </a>
                        <a href="#" class="goole-store-btn"> <i class="fab fa-google-play"></i> Google Play </a>
                    </div><!-- /.btn-con -->
                </div><!-- /.innner-con -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-5 col-md-6 mt-4 mt-md-0">
                <div class="form-sec">
                    <form action="#" method="GET" id="register_id">
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name "
                                   required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name " required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="UserName " required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email " required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder=" Password "
                                   required>
                        </div>
                        <div class="js_hidden-section x-hidden">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="fas fa-mars fa-fw"></i></span></div>
                                    <select name="gender" id="gender" class="form-control" required>
                                        <option value="none">Select Sex:</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select></div>
                            </div>
                            <div class="custom-control custom-checkbox mb10" style="color: white;"><input type="checkbox"
                                                                                                         checked=""
                                                                                                         class="custom-control-input"
                                                                                                         name="privacy_agree"
                                                                                                         id="privacy_agree">
                                <label class="custom-control-label" for="privacy_agree">
                                    By creating your account, you agree to our <a
                                        href="http://fyrestream.com//static/terms" target="_blank">Terms</a> &amp; <a
                                        href="http://fyrestream.com//static/privacy" target="_blank">Privacy Policy</a>
                                </label></div>
                        </div>
                        <button id="sign_up" name="sign_up" type="button" class="sub-btn"> Sign Up</button>
                        <div class="alert alert-danger mb0 error_msg" style="margin-top: 1rem;">
                        </div>
                    </form>
                    <p class="hv-ac"> Have an account? <a href="{{url('login_user')}}"> Login Now </a></p>
                </div><!-- /.form-sec -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.bg-section -->

<footer class="footer">
    <div class="container">
        <div class="footer-list">
            <ul>
                <li><a href="#"> About </a></li>
                <li><a href="#"> Help </a></li>
                <li><a href="#"> Term of Use </a></li>
                <li><a href="#"> Privacy Policy </a></li>
                <li><a href="#"> Cookies </a></li>
                <li><a href="#"> Advertising </a></li>
            </ul>
        </div><!-- /.footer-list -->
        <p class="copy-text">
            Copyrights © 2019. Fyrestream. All Rights Reserved.
        </p><!-- /.copy-text -->
    </div><!-- /.container -->
</footer><!-- /.footer -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
