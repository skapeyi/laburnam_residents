@extends('layouts.main')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Give us your feedback</h3></div>
        <div class="panel-body">
          {!! Form::open(['action' => 'FeedbackController@store']) !!}

          <div class="form-group">
            {!! Form::label('name','Your Name(Optional)') !!}
            {!! Form::text('name', '',['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('category','Service Area') !!}
            {!! Form::select('category', ['management' => 'Management', 'maintenance' => 'Maintenance', 'house-keeping' => 'House Keeping','laundry' => 'Laundry'], null,['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('type','Rate your Satisfication') !!}
            {!! Form::select('type', ['positive' => 'Positive', 'neutral' => 'Neutral', 'negative' => 'Negative'], null,['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('description','Describe your experience') !!}
            {!! Form::textarea('description', '',['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::submit('Submit response',['class' => 'btn btn-primary']) !!}
          </div>

          {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
