@extends('layouts.app')

@section('conteudo')
    <div class="text-center text-white m-4">
        <h1>Movimentações</h1>
    </div>
    <div>
        <a href="/movimentacoes/create" class=" bg-primary border text-white m-4 ">Adicionar movimentação</a>
    </div>

    @foreach ($movimentacoes as $movimentacao)
        <div class="text-white m-4 text-captalize">

            <a href="/movimentacoes/{{ $movimentacao->id }}/edit" class=" bg-success border text-white m-4 ">Editar</a>
            <form action="/movimentacoes/{{ $movimentacao->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="bg-danger border text-white m-4">Deletar</button>
            </form>

            <h2>
                Tipo de movimentação: {{ $movimentacao->tipoMov }}
            </h2>
            <p>Horário de inicio: {{ $movimentacao->horaInicio }}</p>
            <p>Horário de Término: {{ $movimentacao->horaFim }}</p>
            <hr>
        </div>
    @endforeach

@endsection
