@extends('master.usermaster')
@section('title', 'Order')
@section('content')
<div class="container">
  <div class="row">
    <br/><br/><br/>
    <h3>Terms</h3>
    <p>1) Orders must be placed a week before start date.</p>
    <p>2) Duration of packages will be 5 consecutive school days.</p>
    <p>3) For cancellation of orders, contact the admin.</p>
  </div>
  <div class="row">
    <h3>Place Order</h3>

    <div class="panel panel-default">
      <div class="panel panel-body">
        {!! Form::open() !!}
        <label><b>Name of Child</b></label>
        {!! Form::text('childname', '', array('class'=>'form-control')) !!}
        <br/>
        <label><b>Meal Package</b></label>
        <br/>
        <div class="form-group">
          <select data-toggle="select" class="form-control select select-default">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>

        <label><b>Start Date</b></label>
        <br/>
        {!! Form::date('startdate', date('Y-m-d'), array('class'=>'form-control date')) !!}
        <br/>
        {!! Form::checkbox('prepayment', '0', true)!!}&nbsp;Pre-payment
        <br />
        {!! Form::checkbox('postpayment', '1')!!}&nbsp;Post-payment
        <br/><br/>
        <button type="submit" class="btn btn-primary btn-block">Order</button>
        {!! Form::close() !!}
      </div>
    </div>

  </div>
</div>
@endsection
