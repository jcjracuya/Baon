@extends('master.admin-master')
@section('title', 'Edit School')
@section('content')
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-sm-4 col-sm-offset-4">
	      <h3>Edit Order</h3>

				<label><b>Name: </b></label>&nbsp;{{ $o->user['fname'] }} {{ $o->user['lname'] }}
				<br/><br/>
				@if($o['prepayment'] == 0)
					<a href="{!! action('AdminController@updatePrePayment', $o['id']) !!}" class="btn btn-primary btn-large btn-block">Edit Pre-payment</a>
				@endif
				<br/>
				@if($o['postpayment'] == 0)
					<a href="{!! action('AdminController@updatePostPayment', $o['id']) !!}" class="btn btn-primary btn-large btn-block">Edit Post-payment</a>
				@endif

	      </div>
	    </div>
	  </div>
@endsection
