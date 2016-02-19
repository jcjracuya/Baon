@extends('master.admin-master')
@section('title', 'Edit School')
@section('content')
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-sm-4 col-sm-offset-4">
	      <h3>Edit School</h3>


	      {{ Form::open(array(
	                'action' => array('AdminController@updateSchool', $school->id),
	                'class' => 'form')) }}

	      <div class="form-group">
	        {!! Form::text('name', $school->name,
	                      array('required',
	                      'class'=>'form-control',
	                      'placeholder'=>'School')) !!}
	        <br/>
	        {!! Form::text('addr', $school->addr,
	                      array('required',
	                      'class'=>'form-control',
	                      'placeholder'=>'Address')) !!}

	        <br/>
	        {!! Form::text('contactno', $school->contactno,
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
