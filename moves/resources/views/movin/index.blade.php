@extends('layouts.app')

@section('conteudo')
    <h1 class="m-4 text-center">Movimentação</h1>

    <div>
        <a href="movin/create" class="m-4 btn btn-primary" role="button"> Adicionar Movimentação</a>
    </div>

    @foreach ($movimentacaos as $moviment)
        <div class="m-4">
            <h3>
                Tipo de Movimentação: {{ $moviment->tipoMov }}
            </h3>
            <p>
                Inicio da movimentação: {{ $moviment->inicio }}
            </p>
            <p>
                Fim da movimentação: {{ $moviment->fim }}
            </p>
            <hr>
        </div>
    @endforeach
@endsection
