@extends('layouts.app')
@section('title', 'Trains')
@section('content')
    <main>
        <div class="container">
            <h1>Trains</h1>
            <div class="row">
                @forelse ($trains as $train)
                    <div class="col-12 col-md-3 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5>{{ $train->departure_station }}- {{ $train->arrival_station }}</h5>
                                <div class="card-text">
                                    <div>Departure at: {{ $train->departure_time }}</div>
                                    <div>Train n. {{ $train->train_code }} ||Company: {{ $train->company }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div>no record found</div>
                @endforelse
            </div>
        </div>
    </main>
@endsection
