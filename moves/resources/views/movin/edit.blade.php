@extends('layouts.app')

@section('conteudo')
    <h1 class="text-center m-4">Adicionar Containers</h1>

    <form action="/moves/{{ $moves->id }}" method="POST" class="form">
        @csrf
        @method('PUT')

        <div class="row m-4">
            <div class="col">
                <input type="text" class="form-control" value="{{ $moves->cliente }}" name="cliente">
            </div>
            <div class="col">
                <input type="text" class="form-control" value="{{ $moves->numContainer }}" name="numContainer">
            </div>
        </div>

        <div class="row m-4">
            <div class="col">
                <input type="number" class="form-control" value="{{ $moves->tipo }}" name="tipo">
            </div>

            <div class="col">
                <input type="text" class="form-control" value="{{ $moves->status }}" name="status">
            </div>

            <div class="col">
                <input type="text" class="form-control" value="{{ $moves->categoria }}" name="categoria">
            </div>

            <button type="submit" class="col btn btn-primary">Salvar</button>
        </div>


    </form>
@endsection
