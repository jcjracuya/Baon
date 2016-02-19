@extends('master.admin-master')
@section('title', 'Schools')
@section('content')
<div>
	<h2>Schools</h2>
	<table class="table table-striped table-hover table-responsive">
		<thead>
			<th>School</th>
			<th>Address</th>
			<th>Contact No</th>
			<th>Status</th>
			<th>Actions</th>
		</thead>

		<tbody class="">
			@foreach($schools as $s)

				<tr>
					<td><b>{{ $s->name }}</b></td>
					<td>{{ $s->addr}}</td>
					<td>{{ $s->contactno}}</td>
					<td>{{ $s->status == 1 ? 'Active' : 'Inactive' }}</td>
					<td>
									<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
									<button type="button" class="btn btn-primary">Edit</button>
									<!-- Standard gray button with gradient -->
									<button type="button" class="btn btn-default">Delete</button>
					</td>
				</tr>


			@endforeach
		</tbody>
	</table>

</div>
@endsection
