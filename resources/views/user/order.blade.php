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
        {!! Form::open(array(
                        'action' => array('UserController@addOrder'),
                        'class' => 'form')) !!}
          <label><b>Name of Child</b></label>
          {!! Form::text('childname', null, array('class'=>'form-control', 'placeholder'=>'Last Name, First Name M.I.')) !!}
          <br/>

          <label><b>School</b></label>
          <br/>
          <div class="form-group">
            {!! Form::select('school', $school, null, array('class'=>'form-control select select-default')) !!}
          </div>
          <label><b>Meal Package</b></label>
          <br/>
          <div class="form-group">
            {!! Form::select('mpackage', $mpackage, null, array('class'=>'form-control select select-default')) !!}
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
