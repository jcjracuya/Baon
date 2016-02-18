@extends('master.admin-master')
@section('title', 'Add School')
@section('content')
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-sm-4 col-sm-offset-4">
	      <h3>Add School</h3>


	      {{ Form::open(array(
	                'action' => 'AdminAuthController@adminRegister',
	                'class' => 'form')) }}

	      <div class="form-group">
	        {!! Form::text('name', null,
	                      array('required',
	                      'class'=>'form-control',
	                      'placeholder'=>'School')) !!}      
	        <br/>              
	        {!! Form::text('addr', null,
	                      array('required',
	                      'class'=>'form-control',
	                      'placeholder'=>'Address')) !!}     

	        <br/>              
	        {!! Form::text('contactno', null,
	                      array('required',
	                      'class'=>'form-control',
	                      'placeholder'=>'Contact No')) !!}    

	        <br/>              

	        <input type="submit" class="btn btn-block btn-primary btn-wide" value="Submit" />              
	      {{ Form::close() }}

	      </div>            
	    </div>
	  </div>
@endsection