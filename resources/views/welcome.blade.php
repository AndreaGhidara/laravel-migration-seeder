@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <h1>Welcome Page</h1>
        <div class="row g-4">
            <div class="col">
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Company</th>
                                <th scope="col">Arrival Station</th>
                                <th scope="col">Departur Station</th>
                                <th scope="col">Departure Time</th>
                                <th scope="col">Arrival Time</th>
                                <th scope="col">Train Code</th>
                                <th scope="col">Train Carraiges Number</th>
                                <th scope="col">On time</th>
                                <th scope="col">Train cancelled</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trains as $train)
                                <tr>
                                    <th scope="row">{{ $train->company }}</th>
                                    <th>{{ $train->arrival_station }}</th>
                                    <th>{{ $train->departur_station }}</th>
                                    <th>{{ $train->departure_time }}</th>
                                    <th>{{ $train->arrival_time }}</th>
                                    <th>{{ $train->train_code }}</th>
                                    <th>{{ $train->train_carraiges_number }}</th>
                                    {{-- @php
                                        if ($train->on_time == 1) {
                                            $train->on_time = "yes";
                                        } else {
                                            $train->on_time = "late";
                                        }
                                    @endphp --}}
                                    @if ($train->on_time == 1)
                                        <th>yes</th>
                                    @else
                                        
                                    @endif
                                    <th>{{ $train->on_time }}</th>
                                    <th>{{ $train->train_cancelled }}</th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
