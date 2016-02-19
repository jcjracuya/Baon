@extends('master.admin-master')
@section('title', 'Meal Packages')
@section('content')
<div>
	<h2>Meal Packages</h2>

	@foreach($mp as $mp)
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>{{$mp->name}}</h4>
			</div>
			<div class="panel-body">
				<p>Price: <br> <blockquote>{{$mp->price}}</blockquote> </p>
				<p>Details: <br> <blockquote>{{$mp->details}}</blockquote></p>
			</div>
			<div class="panel-footer">
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
					<button type="button" class="btn btn-primary">Edit</button>
					<!-- Standard gray button with gradient -->
					<button type="button" class="btn btn-default">Delete</button>
			</div>
		</div>
	@endforeach

</div>
@endsection
