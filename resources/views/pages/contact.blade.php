@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row well-row">
      <div class="store-info text-center">
        <div class="col-md-6">
          <div class="well match-well">
            {{--TODO: Add opening-hours  --}}
            {{-- <h3>Store Hours</h3>
            <em>Monday - Thursday</em><br>
            11:00am - 10:00pm<br><br>

            <em>Friday - Saturday</em><br>
            11:00am - 11:00pm<br><br>

            <em>Sunday</em><br>
            Closed<br><br> --}}
            <table>
              @foreach($openingHours->forWeek() as $day => $hours)
                  @if($openingHours->isOpenOn($day))
                      <tr>
                          <td>{{ $day }}</td>
                          <td>
                              @foreach($openingHours->forDay($day) as $timeRange)
                                  {{ $timeRange->start() }}
                              @endforeach
                              @foreach($openingHours->forDay($day) as $time)
                                  {{ $time->end() }}
                              @endforeach
                          </td>
                      </tr>
                  @else
                      <tr>
                          <td>{{ $day }}</td>
                          <td>Closed</td>
                      </tr>
                  @endif
              @endforeach
          </table>
          </div>
        </div>
        <!-- Contact Details Column -->
        <div class="col-md-6">
          <div class="well custom-well match-well">
           <h3>Location</h3>
            <p>
              3481 Watt Ave<br>Sacramento, CA 90210<br>
            </p>
            <p><i class="ion-android-call"></i>
              <abbr title="Phone">P</abbr>: (123) 456-7890</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
