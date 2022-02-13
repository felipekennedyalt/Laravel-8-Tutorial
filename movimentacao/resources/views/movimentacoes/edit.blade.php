@extends('layouts.app')

@section('conteudo')
    <div class="text-white text-center m-4">
        <h1>Editar Movimentção</h1>
    </div>

    <div class="m-4">
        <form action="/movimentacoes/{{ $movimentacoes->id }}" method="POST">
            
            @csrf
            @method('PUT')

            <input type="text" name="tipoMov" id="" value="{{ $movimentacoes->tipoMov }}">
            <input type="time" name="horaInicio" id="" value="{{ $movimentacoes->horaInicio }}">
            <input type="time" name="horaFim" id="" value="{{ $movimentacoes->horaFim }}">

            <input type="submit" value="Salvar" class="bg-success text-white border">
        </form>
    </div>
@endsection
