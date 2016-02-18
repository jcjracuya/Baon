@extends('master.master')
@section('title', 'Log In')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <h3>Log In</h3>
      {{ Form::open(array(
                'action' => 'AdminAuthController@adminLogin',
                'class' => 'form')) }}
        <input type="text" class="form-control input-lg" name="username" placeholder="Username" required/>
        <br>
        <input type="password" class="form-control input-lg"name="password" placeholder="Password" required/>
        <br>
        <input type="submit" class="btn btn-block btn-primary btn-wide" value="Submit" />
      {{ Form::close() }}
    </div>
  </div>


</div>

@endsection
