@extends('layouts.app')

@section('content')
<h1 class="text-center">Benvenuto</h1>

<section>
 <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 g-4">

            @forelse ($trains as $train)
            <div class="col">
                <div class="card h-100">
                    {{-- <img class="card-img-top" src="{{$train->property_image}}" alt="{{$train->address}}"> --}}
                    <div class="card-body">
                        <h4 class="card-title">{{ $train->company }}</h4>

                    </div>
                    <div class="card-footer">
                       <p class="card-text">{{ $train->departure_station }}</p>
                       <p class="card-text">{{ $train->arrival_station }}</p>
                       <p class="card-text">{{ $train->departure_time }}</p>
                       <p class="card-text">{{ $train->arrival_time }}</p>
                       <p class="card-text">{{ $train->train_code }}</p>
                       <p class="card-text">{{ $train->number_of_coaches }}</p>
                       <p class="card-text">{{ $train->on_time }}</p>
                       <p class="card-text">{{ $train->cancelled }}</p>
                    </div>
                </div>
            </div>

            @empty
            <div class="col">
                <p class="text-center">Torna dopo!</p>
            </div>
            @endforelse

        </div>
    </div>
</section>
@endsection
