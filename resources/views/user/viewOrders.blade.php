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
				<th>Package</th>
				<th>Child</th>
				<th>Prepayment</th>
				<th>PostPayment</th>
			</thead>

			<tbody class="">
				@foreach($orders as $o)
				<tr>
					<td>{{ $o['id'] }}</td>
					<td>{{ $o->mealpackages['name'] }}</td>
					<td>{{ $o['childname'] }}</td>
					<td>{{ $o['prepayment'] == 1 ? 'Paid' : '' }}</td>
					<td>{{ $o['postpayment'] == 1 ? 'Paid' : '' }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
