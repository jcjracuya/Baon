@extends('master.master')
@section('title', 'Sign Up')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <h3>Sign Up</h3>


      {{ Form::open(array(
                'action' => 'AdminAuthController@adminRegister',
                'class' => 'form')) }}

      <div class="form-group">
        {!! Form::text('fname', null,
                      array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Last Name')) !!}      
        <br/>              
        {!! Form::text('lname', null,
                      array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Last Name')) !!}     

        <br/>              
        {!! Form::text('username', null,
                      array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Username')) !!}    

        <br/>              
        {!! Form::email('email', null,
                      array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Email')) !!}   
        <br/>  
        <input type="password" class="form-control" placeholder="Password">
        <br/>  

        <input type="password" class="form-control"  placeholder="Confirm Password">
        <br/>  

        <input type="submit" class="btn btn-block btn-primary btn-wide" value="Submit" />              
      {{ Form::close() }}

      </div>            
    </div>
  </div>


</div>

@endsection
