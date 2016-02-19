@extends('master.usermaster')
@section('title', 'View Orders')
@section('content')
<div class="container">
  <div class="row">
		<br/>
		<br/>
		<h2>Orders</h2>

		<table class="table table-striped table-hover table-responsive">
			<thead>
				<th>Order #</th>
				<th>Child</th>
				<th>Package</th>
				<th>Start Date</th>
				<th>Date Ordered</th>
			</thead>

			<tbody class="">
				@foreach($orders as $o)
				<tr>
					<td>{{ $o['id'] }}</td>
					<td>{{ $o['childname'] }}</td>
					<td>{{ $o->mealpackages['name'] }}</td>
					<td>{{ $o['startdate'] }}</td>
					<td>{{ date('F d, Y', strtotime($o['created_at'])) }}</td>

				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
