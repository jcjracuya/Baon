@extends('master.usermaster')
@section('title', 'Meal Packages')
@section('content')
<div class="container">
  <div class="row">
		<br/>
		<br/>
		<a href="javascript:history.go(-1);">← Back</a>
		<h2>Meal Packages</h2>

		@foreach($mpackage as $mp)
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>{{$mp['name']}}</h4>
				</div>
				<div class="panel-body">
					<p>Price: <br> <blockquote>{{$mp['price']}}</blockquote> </p>
					<p>Details: <br> <blockquote>{{$mp['details']}}</blockquote></p>
					<a class="btn btn-primary btn-large btn-block btn-order" href="{!! action('UserController@order') !!}">Place Order</a>
				</div>
			</div>
	@endforeach
	</div>
</div>
@endsection
