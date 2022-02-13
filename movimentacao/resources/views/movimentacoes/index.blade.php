@extends('layouts.app')

@section('conteudo')
    <div class="text-white text-center m-4">
        <h1>Movimentção</h1>
    </div>

    <a href="/movimentacoes/create" class="text-white m-4 border bg-primary">Adicionar movimentação</a>


    @foreach ($movimentacoes as $movimentacao)
    <div class="text-white m-4">
        <a href="/movimentacoes/{{ $movimentacao->id }}/edit" class="text-white m-4 border bg-success">Editar movimentação</a>
        <h3>
            Tipo de movimentação: {{ $movimentacao->tipoMov }}
        </h3>

        <p>
            Hora de inicio: {{ $movimentacao->horaInicio }}
        </p>

        <p>
            Hora de trémino: {{ $movimentacao->horaFim }}
        </p>
        <hr>
    </div>
    @endforeach
@endsection
