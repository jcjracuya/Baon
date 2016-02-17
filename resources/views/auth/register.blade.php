@extends('master.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h3>Register</h3>
            <form role="form" method="POST" action="{{ url('/register') }}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">


                        <input type="text" class="form-control" name="lname" value="{{ old('lname') }}" placeholder="Lastname">

                        @if ($errors->has('lname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lname') }}</strong>
                            </span>
                        @endif

                </div>

                <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">


                        <input type="text" class="form-control" name="fname" value="{{ old('fname') }}" placeholder="Firstname">

                        @if ($errors->has('fname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fname') }}</strong>
                            </span>
                        @endif

                </div>

                <div class="form-group{{ $errors->has('addr') ? 'has-error' : '' }}">


                      <input type="text" class="form-control" name="addr" value="{{ old('addr') }}" placeholder="Address">

                      @if ($errors->has('addr'))
                          <span class="help-block">
                              <strong>{{ $errors->first('addr') }}</strong>
                          </span>
                      @endif
                </div>

                <div class="form-group{{ $errors->has('contactno') ? 'has-error' : '' }}">


                      <input type="text" class="form-control" name="contactno" value="{{ old('contactno') }}" placeholder="Contact No.">

                      @if ($errors->has('contactno'))
                          <span class="help-block">
                              <strong>{{ $errors->first('contactno') }}</strong>
                          </span>
                      @endif

                </div>

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

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">


                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">
                        <i class="fa fa-btn fa-"></i>Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
