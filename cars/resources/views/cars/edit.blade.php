@extends('layouts.app')

@section('content')

    <div class="shadow p-auto m-auto bg-light rounded">
        <div class="text-center">
            <h1 class="uppercase">Update car</h1>

        </div>
    </div>

    <div>
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="d-block p-2 bg-primary text-white">
                <input type="text" name="name" placeholder="Brand name" value="{{ $car->name }}">
                <input type="text" name="founded" placeholder="founded" value="{{ $car->founded }}">
                <input type="text" name="description" placeholder="description" value="{{ $car->description }}">

                <button type="submit" class="rounded bg-primary text-white border">Submit</button>
            </div>
        </form>
    </div>
@endsection
