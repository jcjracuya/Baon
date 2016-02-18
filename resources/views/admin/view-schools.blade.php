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
			<tr>
				<td><a href="">University of Cebu - Main</a></td>
				<td>Sanciangko St, Cebu City</td>
				<td>255-7777</td>
				<td>Active</td>
				<td>
		            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
		            <button type="button" class="btn btn-primary">Edit</button>
		            <!-- Standard gray button with gradient -->
		            <button type="button" class="btn btn-default">Delete</button>
				</td>						
			</tr>

			<tr>
				<td><a href="">asdfasdf</a></td>
				<td>asdfasdf</td>
				<td>asdfasdf</td>
				<td>asdfasdf</td>
				<td>
					<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
		            <button type="button" class="btn btn-primary">Edit</button>
		            <!-- Standard gray button with gradient -->
		            <button type="button" class="btn btn-default">Delete</button>
				</td>							
			</tr>

			<tr>
				<td><a href="">asdfasdf</a></td>
				<td>asdfasdf</td>
				<td>asdfasdf</td>
				<td>asdfasdf</td>
				<td>
					<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
		            <button type="button" class="btn btn-primary">Edit</button>
		            <!-- Standard gray button with gradient -->
		            <button type="button" class="btn btn-default">Delete</button>
				</td>							
			</tr>

			<tr>
				<td><a href="">asdfasdf</a></td>
				<td>asdfasdf</td>
				<td>asdfasdf</td>
				<td>asdfasdf</td>
				<td>
					<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
		            <button type="button" class="btn btn-primary">Edit</button>
		            <!-- Standard gray button with gradient -->
		            <button type="button" class="btn btn-default">Delete</button>
				</td>								
			</tr>
			
		</tbody>
	</table>
</div>
@endsection