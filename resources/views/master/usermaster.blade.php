<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Baon ">
    <meta name="author" content="Powerpuff Girls">

    <title>@yield('title')</title>

    <!-- FLAT UI -->
    <link href="{{ URL::asset('flatui/dist/css/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('flatui/dist/css/flat-ui.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('flatui/docs/assets/css/demo.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}">



    <!-- END OF FLAT UI -->

    <!-- FLATFY -->
    <!-- Bootstrap core CSS -->
    <!-- <link href="{{ URL::asset('flatfy/css/bootstrap.min.css')}}" rel="stylesheet"> -->

    <!-- Custom Google Web Font -->
    <!-- <link href="{{ URL::asset('flatfy/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'> -->

    <!-- Custom CSS-->
    <!-- <link href="{{ URL::asset('flatfy/css/general.css') }}" rel="stylesheet"> -->

   <!-- Owl-Carousel -->
    <!-- <link href="{{ URL::asset('flatfy/css/custom.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('flatfy/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('flatfy/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('flatfy/css/animate.css') }}" rel="stylesheet"> -->

    <!-- Magnific Popup core CSS file -->
    <!-- <link rel="stylesheet" href="{{ URL::asset('flatfy/css/magnific-popup.css') }}"> -->

    <!-- <script src="{{ URL::asset('flatfy/js/modernizr-2.6.2.min.js') }}"></script>  -->
    <!-- END OF FLATFY -->
  </head>

  <body>
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-03">
          <span class="sr-only">Toggle navigation</span>
        </button>
        <a class="navbar-brand" href="#">Baon</a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-03">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="{{ URL::to('/logout')}}">Log Out</a></li>
         </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

    <!-- <div class="container"> -->
      @yield('content')
    <!-- </div> -->

    <br><br><br>

    <script src="{{ URL::asset('flatui/dist/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('flatui/dist/js/vendor/video.js') }}"></script>
    <script src="{{ URL::asset('flatui/dist/js/flat-ui.min.js') }}"></script>
    <script src="{{ URL::asset('flatui/docs/assets/js/application.js') }}"></script>
  </body>
</html>
