@extends("layouts.app")

@section("page-title", "Trains")

@section("main-content")
<main class='container'>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">Company</th>
            <th scope="col">Departure Station</th>
            <th scope="col">Arrival Station</th>
            <th scope="col">Departure Date</th>
            <th scope="col">Departure Time</th>
            <th scope="col">Arrival Date</th>
            <th scope="col">Arrival Time</th>
            <th scope="col">Train Code</th>
            <th scope="col">Wagons Number</th>
            <th scope="col">On Time</th>
            <th scope="col">Suspended</th>
            <th scope="col"></th>
          </tr>
        </thead>

        <tbody>
            @foreach($trains as $train)
          <tr>
            <th>
                {{$train->id}}
            </th>
            <th>
                {{$train->company}}
            </th>
            <th>
                {{$train->departure_station}}
            </th>
            <th>
                {{$train->arrival_station}}
            </th>
            <th>
                {{$train->departure_date}}
            </th>
            <th>
                {{$train->departure_time}}
            </th>
            <th>
                {{$train->arrival_date}}
            </th>
            <th>
                {{$train->arrival_time}}
            </th>
            <th>
                {{$train->train_code}}
            </th>
            <th>
                {{$train->wagons_number}}
            </th>
            <th>
                {{$train->on_time}}
            </th>
            <th>
                {{$train->suspended}}
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
</main>
@endsection
