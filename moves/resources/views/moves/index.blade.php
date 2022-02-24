@extends('layouts.app')

@section('conteudo')
    <div class="text-center m-4">
        <h1>Containers</h1>
    </div>

    <div>
        <a href="moves/create" class="m-4 btn btn-primary" role="button"> Adicionar container</a>
    </div>


    @foreach ($moves as $move)
        <div class="m-4">
            <h2>
                Cliente:
                <a href="/moves/{{ $move->id }}" class="text-decoration-none">{{ $move->cliente }}</a>
            </h2>

            <p>
                Numero do Container: {{ $move->numContainer }}
            </p>

            <p>
                Tipo: {{ $move->tipo }}
            </p>

            <p>
                Status: {{ $move->status }}
            </p>

            <p>
                Categoria: {{ $move->categoria }}
            </p>


            <a href="moves/{{ $move->id }}/edit" class="col m-4 btn btn-success" role="button"> Editar</a>


            <form class="m-auto" action="/moves/{{ $move->id }}" method="POST">
                @csrf
                @method('delete')
                <button class="col m-4 btn btn-danger" type="submit">Delete</button>
            </form>

            <hr>
        </div>
    @endforeach
@endsection
