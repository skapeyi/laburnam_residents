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
                    <th>Category</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Date Added</th>
                </tr>
                </thead>
                <tbody>
                @foreach($feedback as $item)
                    <tr>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['category']}}</td>
                        <td>{{$item['type']}}</td>
                        <td>{{$item['description']}}</td>
                        <td>{{date('d/M/y',strtotime($item["created_at"]))}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>

</div>
@endsection
