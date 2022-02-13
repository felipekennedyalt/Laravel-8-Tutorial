@extends('layouts.app')

@section('conteudo')
    <div class="text-white text-center m-4">
        <h1>Movimentção</h1>
    </div>

    <a href="/movimentacoes/create" class="text-white m-4">Adicionar movimentação</a>


    <div class="text-white m-4">
        <h3>
            Tipo de movimentação:
        </h3>

        <p>
            Hora de inicio:
        </p>

        <p>
            Hora de trémino:
        </p>
    </div>
@endsection
