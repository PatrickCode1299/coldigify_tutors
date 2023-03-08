@extends('layouts.app')
@section('content')
<section class="container-fluid payment-details-table">
  <div class="table-responsive">
	@if(!empty($payment_info))
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Course Name</th>
      <th scope="col">Student Email</th>
      <th scope="col">Instructor Email</th>
      <th scope="col">Payment Date</th>
      <th scope="col">Payment Amount</th>
      <th scope="col">Invoice</th>
      <th scope="col">Status</th>
    </tr>
  </thead><br/>
  @foreach($payment_info as $payment)
  <tbody>
    <tr>
      <td>{{$payment->course_name}}</td>
      <td>{{$payment->student_email}}</td>
      <td>{{$payment->instructor_name}}</td>
      <td>{{$payment->payment_date}}</td>
      <td>{{$payment->payment_amount}}</td>
      <td>{{$payment->invoice_id}}</td>
      <td>{{$payment->status}}</td>
      
    </tr>
  </tbody><br/>
    @endforeach
</table>
</div>
@else

<div class="container card shadow-lg">
<h2>You haven't made any payment yet</h2>
</div>
@endif
</section>
@endsection