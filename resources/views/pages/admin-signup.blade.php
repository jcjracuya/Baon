@extends('master.master')
@section('title', 'Sign Up')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <h3>Sign Up</h3>
      <form class="" method="post">
        <input type="text" class="form-control input-lg" placeholder="Firstname" />
        <br>
        <input type="password" class="form-control input-lg" placeholder="Lastname" />
        <br>
        <input type="text" class="form-control input-lg" placeholder="Username" />
        <br>
        <input type="email" class="form-control input-lg" placeholder="Email" />
        <br>
        <input type="password" class="form-control input-lg" placeholder="Password" />
        <br>
        <input type="password" class="form-control input-lg" placeholder="Confirm Password" />
        <br>
        <input type="submit" class="btn btn-block btn-primary btn-wide" value="Submit" />
      </form>
    </div>
  </div>


</div>

@endsection
