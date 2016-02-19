@extends('master.admin-master')
@section('title', 'Add Meal Package')
@section('content')
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-sm-6 col-sm-offset-3">
	      <h3>Add Meal Package</h3>


	      {{ Form::open(array(
	                'action' => 'AdminController@storeMP',
	                'class' => 'form')) }}

	      <div class="form-group">
	        {!! Form::text('name', null,
	                      array('required',
	                      'class'=>'form-control',
	                      'placeholder'=>'Meal Package Title')) !!}
	        <br/>
	        {!! Form::textarea('details', null,
	                      array('required',
	                      'class'=>'form-control',
	                      'placeholder'=>'Details')) !!}

	        <br/>
	        {!! Form::number('price', null,
	                      array('required',
	                      'class'=>'form-control',
	                      'placeholder'=>'Price')) !!}

	        <br/>

	        <input type="submit" class="btn btn-block btn-primary btn-wide" value="Submit" />
	      {{ Form::close() }}

	      </div>
	    </div>
	  </div>
@endsection
