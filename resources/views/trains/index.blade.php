@extends('layouts.app')
@section('title', 'Trains')
@section('content')
    <main>
        <div class="container">
            <h1>Trains</h1>

            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Train Number</th>
                            <th scope="col">Departure</th>
                            <th scope="col">Destination</th>
                            <th scope="col">Departure time</th>
                            <th scope="col">Carriages</th>
                            <th scope="col">Company</th>
                            <th scope="col">Delayed</th>
                            <th scope="col">Deleted</th>


                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($trains as $train)
                            <tr>
                                <th>#{{ $train->train_code }}</th>
                                <td>{{ $train->departure_station }}</td>
                                <td>{{ $train->arrival_station }}</td>
                                <td class="{{ $train->deleted == 1 ? 'deleted' : '' }}">{{ $train->departure_time }}
                                </td>

                                <td>{{ $train->n_carriages }}</td>
                                <td>{{ $train->company }}</td>
                                <td>
                                    <div class="{{ $train->in_time == 0 ? 'warning' : '' }}"></div>
                                </td>
                                <td>
                                    <div class="{{ $train->deleted == 1 ? 'danger' : '' }}"></div>
                                </td>

                            </tr>
                        @empty
                            <div>No trains found for today</div>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
        </div>
    </main>
@endsection
