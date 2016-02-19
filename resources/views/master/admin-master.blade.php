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

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="../../dist/js/vendor/html5shiv.js"></script>
      <script src="../../dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="{{ action('AdminController@index') }}">Baon - Admin</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="{{ action('AdminController@index') }}">Home</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schools <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ action('AdminController@viewSchools') }}">View Schools</a></li>
                <li><a href="{{ action('AdminController@addSchool') }}">Add Schools</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Packages <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ action('AdminController@viewMP') }}">View Meal Packages</a></li>
                <li><a href="{{ action('AdminController@addMP') }}">Add Meal Package</a></li>
              </ul>
            </li>

            <li><a href="{{ URL::to('/logout')}}">Log Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container">
    <br><br>
      @yield('content')

    </div> <!-- /container -->



    <script src="{{ URL::asset('flatui/dist/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('flatui/dist/js/vendor/video.js') }}"></script>
    <script src="{{ URL::asset('flatui/dist/js/flat-ui.min.js') }}"></script>
    <script src="{{ URL::asset('flatui/docs/assets/js/application.js') }}"></script>

  </body>
</html>
