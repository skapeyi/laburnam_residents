@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-md-6">
  </div>
  <div class="col-md-6">
  </div>
  <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-responsive table-stripped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Accomodation Type</th>
                    <th>Booking Date</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{$booking['name']}}</td>
                        <td>{{$booking['phone']}}</td>
                        <td>{{$booking['email']}}</td>
                        <td>{{$booking['check_in']}}</td>
                        <td>{{$booking['check_out']}}</td>
                        <td>{{$booking['housing_type']}}</td>
                        <td>{{date('d/M/y',strtotime($booking["created_at"]))}}</td>
                        <td>{{$booking['more_info']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>

</div>
@endsection
