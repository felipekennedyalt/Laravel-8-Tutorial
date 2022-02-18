@extends('layouts.app')

{{-- isso é do ARRAY --}}
{{-- @foreach ($cars as $car)


    {{ $car['name'] }}


@endforeach --}}

{{-- Esse é do JSON --}}
{{-- @foreach ($cars as $car)


    {{ $car->name }}


@endforeach --}}


@section('content')
    <div class="shadow p-auto m-4 bg-light rounded ">
        <div class="text-center">
            <h3 class="text-uppercase text-black-50">CARRO</h3>
        </div>

        <div class="m-4">
            <a href="/cars/create" class="rounded bg-primary text-white border">Add a new car &rarr;</a>
        </div>


        <div class="m-4">
            @foreach ($cars as $car)
                <div class="float-right">
                    <a class="rounded bg-success text-white border" href="cars//edit">
                        Edit &rarr;
                    </a>
                    <form class="m-auto" action="/cars/" method="POST">
                        @csrf
                        @method('delete')
                        <button class="rounded bg-danger text-white border" type="submit">Delete &rarr;</button>
                    </form>
                </div>
                <div class="m-auto">
                    <span class="text-info text-capitalize font-italic">
                        Founded: {{ $car->founded }}
                    </span>

                    <h2 class="text-secondary">
                        <a href="/cars/{{ $car->id }}">{{ $car->name }}</a>
                    </h2>
                    <p class="text-secondary m-auto">
                        Description: {{ $car->description }}
                    </p>
                    <hr class="t-2 b4">
                </div>
            @endforeach
        </div>
    </div>
@endsection
