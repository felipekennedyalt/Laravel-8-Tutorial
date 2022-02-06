@extends('layouts.app')

@section('content')
    <div class="shadow p-auto m-auto bg-light rounded ">
        <div class="text-center">
            <h3 class="text-uppercase text-black-50">CARRO</h3>
        </div>

        <div class="t-2">
            <a href="/cars/create" class="rounded bg-primary text-white border">Add a new car &rarr;</a>
        </div>


        <div class="y-2 x-1">
            @foreach ($cars as $car)
                <div class="m-auto">
                    <span class="text-info text-capitalize font-italic">
                        Founded: {{ $car->founded }}
                    </span>

                    <h2 class="text-secondary">
                        {{ $car->name }}
                    </h2>
                    <p class="text-secondary m-auto">{{ $car->description }}</p>
                    <hr class="t-2 b4">
                </div>
            @endforeach
        </div>
    </div>
@endsection
