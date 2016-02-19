@extends('master.master')
@section('title', 'Login')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br/><br/><br/>
            <h3>Log In</h3>
            <form class="form-horizontal" role="form" method="POST" action="{!! action('LoginController@login') !!}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control" name="password" placeholder="Password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i>Login
                        </button
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
