@extends('layouts.app')

@section('content')
    <div class="shadow p-auto m-4 bg-light rounded ">
        <div class="text-center">
            <h3 class="text-uppercase text-black-50">{{ $car->name }}</h3>
        </div>

        <div class="m-4 text-center">

            <div class="m-auto">
                <span class="text-info text-capitalize font-italic">
                    Founded: {{ $car->founded }}
                </span>
                <p class="text-secondary m-auto">
                    Description: {{ $car->description }}
                </p>
                <ul>
                    <p class="text-secondary m-4">
                        Models:
                    </p>

                    @forelse ($car->carModels as $model)
                        <li>
                            {{ $model['model_name'] }}
                        </li>
                    @empty
                    <p class="text-capitalize">
                        No models found
                    </p>
                    @endforelse
                </ul>
                <hr class="t-2 b4">
            </div>
        @endsection
