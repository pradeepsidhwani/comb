<!DOCTYPE html>
<html>
</html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Comb - The Smart Portfolio</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
  <!-- Google fonts - Roboto-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,400italic">
  <!-- owl carousel-->
  <link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.theme.default.css')}}">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="{{asset('assets/css/style.default.css')}}" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
  <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
  <div id="all">
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">
        <!--   *** SIDEBAR ***-->
        @include('includes.sidebar')
        <!--   *** SIDEBAR END ***  -->
        <!--   *** PORTFOLIO ***-->
        <div class="col-md-8 col-lg-9 content-column @yield('background')">
          @yield('content')
        </div>
        <!--   *** PORTFOLIO END ***-->
      </div>
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/popper.js/umd/popper.min.js')}}"> </script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/masonry-layout/masonry.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/js/front.js')}}"></script>
</body>
