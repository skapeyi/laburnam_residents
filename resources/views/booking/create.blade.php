@extends('layouts.main')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Bookings</h3></div>
        <div class="panel-body">
          {!! Form::open(['action' => 'BookingController@store']) !!}

          <div class="form-group">
            {!! Form::label('name','Your Name')!!}
            {!! Form::text('name', '', ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('check_in','Check-In Date')!!}
            {!! Form::text('check_in', '', ['class' => 'form-control', 'id' => 'checkin']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('check_out','Check-Out Date') !!}
            {!! Form::text('check_out', '',['class' => 'form-control','id' => 'checkout']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('housing_type','Housing Type') !!}
            {!! Form::select('housing_type', ['superior_single' => 'Superior Single', 'superior_2_people' => 'Superior Double', 'apartment_one_bedroom' => 'Apartment One Bedroom','apartment_two_bedroom' => 'Apartment Two Bedroom','apartment_three_bedroom' => 'Apartment Three Bedroom','apartment_four_bedroom' => 'Apartment Four Bedroom'], null,['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('adults','No of Adults') !!}
            {!! Form::text('adults', '',['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('children','No of children') !!}
            {!! Form::text('children', '',['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('email', 'E-Mail Address') !!}
            {!! Form::text('email', '',['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('phone','Telephone ( Include Country Code)') !!}
            {!! Form::text('phone', '',['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('more_info','Any more Information about the booking') !!}
            {!! Form::textarea('more_info', '',['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::submit('Make Booking',['class' => 'btn btn-primary']) !!}
          </div>

          {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
  $(function() {
     $( "#checkin" ).datepicker({
       dateFormat:'yy-mm-dd',
     });
   });

   $(function() {
     $( "#checkout" ).datepicker({
       dateFormat:'yy-mm-dd',
     });
   });
});

</script>
@endsection
