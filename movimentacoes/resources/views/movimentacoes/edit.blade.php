@extends('layouts.app')

@section('conteudo')

    <div>
        <h1 class="text-center text-white m-4">Editar Movimentações</h1>

        <div class="block m-4">
            <form action="/movimentacoes/{{ $movimentacoes->id }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <input type="text" name="tipoMov" value="{{ $movimentacoes->tipoMov }}">
                    <input type="time" name="horaInicio" value="{{ $movimentacoes->horaInicio }}">
                    <input type="time" name="horaFim" value="{{ $movimentacoes->horaFim }}">

                    <button type="submit" class="bg-success text-white border">Salvar</button>
                </div>
            </form>

        </div>
    </div>
@endsection
