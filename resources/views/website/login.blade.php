<!doctype html>
<html lang="en">
<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

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
            <p class="sub-title mt-4"> A little more conversation, a little less aggravation! Amazing support. </p><!-- /.sub-title -->
            <p class="sub-title mt-4"> Tired of being unfairly targeted, bullied, or penalized by big tech social networks? Join now to
              freely express yourself. </p>
              <div class="btn-con mt-5">
                <a href="#" class="app-store-btn mr-2">  <i class="fab fa-apple" aria-hidden="true"></i> App Store </a>
                <a href="#" class="goole-store-btn"> <i class="fab fa-google-play"></i> Google Play </a>
              </div><!-- /.btn-con -->
          </div><!-- /.innner-con -->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-5 col-md-6 mt-4 mt-md-0">
          <div class="form-sec">
            @if(session()->has('delete'))
              <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{session()->get('delete')}}</strong>
              </div>
            @endif
            <form action="{{route('login_user')}}" method="POST">
                @csrf
              <div class="form-group">
                <input name="email" type="text" class="form-control" placeholder="Email " required>
              </div>
              <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder=" Password " required>
              </div>
              <button type="submit" class="sub-btn"> Sign In </button>
            </form>
            <div class="act-sec mt-1">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">Keep Loged in
                </label>
              </div>
              <div class="forget">
                <a href="#">Forget Password? </a>
              </div><!-- /.forget -->
            </div><!-- /.act-sec -->
            <p class="privay-txt">
              Fyrestream is an entertainment social network and we respect
              your privacy. We do not re-distribute or sell your personal
              information to third-party organizations. Fyrestream will not
              disclose, without your consent, personal information collected
              about you, except for certain explicit circumstances in which
              disclosure is required by law. Read our
              <a href="#">Privacy Policy</a> for more. By entering this site,
              you agree to our <a href="#">Terms of Use</a>
            </p>
            <a href="{{url('sign_up')}}" class="create-btn mt-4"> Create New Account </a>
          </div><!-- /.form-sec -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.bg-section -->

  <footer class="footer">
    <div class="container">
      <div class="footer-list">
        <ul>
          <li> <a href="#"> About </a> </li>
          <li> <a href="#"> Help </a> </li>
          <li> <a href="#"> Term of Use </a> </li>
          <li> <a href="#"> Privacy Policy </a> </li>
          <li> <a href="#"> Cookies </a> </li>
          <li> <a href="#"> Advertising </a> </li>
        </ul>
      </div><!-- /.footer-list -->
      <p class="copy-text">
        Copyrights ?? 2019. Fyrestream. All Rights Reserved.
      </p><!-- /.copy-text -->
    </div><!-- /.container -->
  </footer><!-- /.footer -->

  <script>
        $(document).ready(function() {
            // show the alert
            setTimeout(function() {
                $(".alert").alert('close');
            }, 2000);
        });
    </script>

</body>
</html>
