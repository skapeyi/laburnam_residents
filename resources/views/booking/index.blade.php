@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary">
      <div class="panel-body" id="user-activity">

      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-body" id="user-by-country">
    </div>

    </div>
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
<script>
$(function () {
  Highcharts.chart('user-activity', {
  chart: {
      type: 'column'
  },
  title: {
      text: 'Monthly booking by room type'
  },

  xAxis: {
      categories: [
          'Jan',
          'Feb',
          'Mar',
          'Apr',
          'May',
          'Jun',
          'Jul',
          'Aug',
          'Sep',
          'Oct',
          'Nov',
          'Dec'
      ],
      crosshair: true
  },
  yAxis: {
      min: 0,
      title: {
          text: 'Number of bookings'
      }
  },
  tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
  },
  plotOptions: {
      column: {
          pointPadding: 0.2,
          borderWidth: 0
      }
  },
  series: [{
      name: 'Superior Single',
      data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

  }, {
      name: 'Superior Double',
      data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

  }, {
      name: 'Apartment - One bedroom',
      data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

  }, {
      name: 'Apartment - Two bedroom',
      data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

  }, {
      name: 'Apartment - Three bedroom',
      data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

  }, {
      name: 'Apartment - Four bedroom',
      data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

  }]
});});


$(function () {
    Highcharts.chart('user-by-country', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Bookings follow up'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Users',
            colorByPoint: true,
            data: [{
                name: 'Not contacted, not confirmed',
                y: {!! $not_contacted_not_confirmed!!}
            }, {
                name: 'Contacted, not confirmed',
                y: {!! $contacted_not_confirmed !!},
            },{
                name: 'Contacted confirmed',
                y: {!! $contacted_confirmed !!},
            },
          ]
        }]
    });
});
</script>
@endsection
