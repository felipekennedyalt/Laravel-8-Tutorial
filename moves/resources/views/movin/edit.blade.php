@extends('layouts.app')

@section('conteudo')
    <h1 class="text-center m-4">Editar Movimentação</h1>

    <div class="m-4">
        <form action="/movin/{{ $movi->id }}" method="POST" class="form row">
            @csrf
            @method('PUT')

            <div class="col">
                <input type="text" class="form-control" name="tipoMov" value="{{ $movi->tipoMov }}">
            </div>

            <div class="col">
                <input type="datetime-local" class="form-control" name="inicio" value="{{ $movi->inicio }}">
            </div>

            <div class="col">
                <input type="datetime-local" class="form-control" name="fim" value="{{ $movi->fim }}">
            </div>

            <div class="col">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>

    </div>
@endsection
