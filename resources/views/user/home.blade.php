@extends('master.usermaster')
@section('title', 'Home')
@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active">

      <div class="image-header-cover">
        <div class="col-md-6 col-md-offset-2">
          <div class="carousel-text-container">
            <h2 class="carousel-text">Choose meal packages for your child</h2>
          </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <div class="button-order">
            <a class="btn btn-primary btn-large btn-block btn-order" href="{!! action('UserController@order') !!}">Place Order</a>
          </div>
        </div>
      </div>
        <img src="{{ URL::to('flatui/img/bg.jpg') }}" class="image-container">
    </div>


  </div>
</div>
<br/><br/><br/>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row">

        @foreach($mpackage as $mp)
        <div class="col-md-4">
          <div class="tile">
            <img src="{{ URL::asset('flatui/img/icons/icon1.png') }}" class="tile-image big-illustration">
            <h3 class="tile-title">{{ $mp['name'] }}</h3>
            <p>P {{ $mp['price'] }}</p>
            <a class="btn btn-primary btn-large btn-block" href="{!! action('UserController@getSpecificPackage', $mp['id']) !!}">Details</a>
          </div>
        </div>
        @endforeach

        <!-- <div class="col-md-4">
          <div class="tile">
            <img src="{{ URL::asset('flatui/img/icons/icon2.png') }}" class="tile-image big-illustration">
            <h3 class="tile-title">Package 2</h3>
            <p>Healthy and Yummy</p>
            <a class="btn btn-primary btn-large btn-block" href="#">Details</a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="tile">
            <img src="{{ URL::asset('flatui/img/icons/icon3.png') }}" class="tile-image big-illustration">
            <h3 class="tile-title">Package 3</h3>
            <p>Go, Grow, & Glow</p>
            <a class="btn btn-primary btn-large btn-block" href="#">Details</a>
          </div>
        </div> -->

      </div>
    </div>


  </div> <!-- /row -->
</div><!-- /.container -->

@endsection
