@extends('layouts.app')
@section('title', 'All Trains')
@section('content')
    <main>
        <div class="container">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Train Number</th>
                            <th>Departure</th>
                            <th>Destination</th>
                            <th>Departure time</th>
                            <th>Carriages</th>
                            <th>Company</th>
                            <th>Delayed</th>
                            <th>Deleted</th>


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
