@extends('master.admin-master')
@section('title', 'Home')
@section('content')
<div>
	<h2>Order</h2>

	<table class="table table-striped table-hover table-responsive">
		<thead>
			<th>Order #</th>
			<th>User</th>
			<th>Package</th>
			<th>Child</th>
			<th>Prepayment</th>
			<th>PostPayment</th>
			<th>Created At</th>
			<th>Status</th>
		</thead>

		<tbody class="">
			@foreach($orders as $o)
				<tr>
					<td><a href="{!! action('AdminController@updateOrder', $o['id']) !!}">{{$o['id']}}</a></td>
					<td>{{$o->user['lname']}}, {{$o->user['fname']}}</td>
					<td>{{ $o->mealpackages['name']}}</td>
					<td>{{ $o['childname']}}</td>
					<td>{{ $o['prepayment'] }}</td>
					<td>{{ $o['postpayment'] }}</td>
					<td>{{ date('F d, Y', strtotime($o['created_at'])) }}</td>
					<td>{{ $o['status']}}</td>
				</tr>
			@endforeach

		</tbody>
	</table>
</div>
@endsection
