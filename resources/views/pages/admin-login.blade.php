@extends('master.master')
@section('title', 'Log In')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <h3>Log In</h3>
      <form class="" method="post">
        <input type="text" class="form-control input-lg" placeholder="Username" />
        <br>
        <input type="password" class="form-control input-lg" placeholder="Password" />
        <br>
        <input type="submit" class="btn btn-block btn-primary btn-wide" value="Submit" />
      </form>
    </div>
  </div>


</div>

@endsection
