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

                <table class="table table-dark">

                    <tr class="bg-blue-100">
                        <th class="w-1/4 border-4 border-gray-500">
                            Model
                        </th>
                        <th class="w-1/4 border-4 border-gray-500">
                            Engines
                        </th>
                        <th class="w-1/4 border-4 border-gray-500">
                            Date
                        </th>
                    </tr>

                    @forelse ($car->carModels as $model)
                        <tr>
                            <td class="border-4 border-gray-500">
                                {{ $model->model_name }}
                            </td>

                            <td class="border-4 border-gray-500">
                                @foreach ($car->engines as $engine)
                                    @if ($model->id == $engine->model_id)
                                        {{ $engine->engine_name }}
                                    @endif
                                @endforeach
                            </td>

                            <td class="border-4 border-gray-500">
                                {{ date('d-m-Y', strtotime($car->productionDate->created_at)) }}
                            </td>
                        </tr>
                    @empty
                        <p>
                            No car models found!
                        </p>
                    @endforelse

                    <p>
                        Product types:
                        @forelse ($car->products as $product)
                            {{ $product->name }}
                        @empty
                            <p>No car product description</p>
                        @endforelse
                    </p>
                <hr class="t-2 b4">
            </div>
        @endsection
