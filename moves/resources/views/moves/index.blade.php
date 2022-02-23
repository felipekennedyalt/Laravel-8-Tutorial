@extends('layouts.app')

@section('conteudo')
    <div class="text-center m-4">
        <h1>Containers</h1>
    </div>

    <div>
        <a href="moves/create" class="link-primary m-4 text-decoration-none"> Adicionar container</a>
    </div>

    @foreach ($moves as $move)
        <div class="m-4">
            <h2>
                Cliente: {{ $move->cliente }}
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
            <hr>
        </div>
    @endforeach
@endsection
