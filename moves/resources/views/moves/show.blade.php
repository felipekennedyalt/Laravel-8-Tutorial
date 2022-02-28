@extends('layouts.app')

@section('conteudo')
    <div class="text-center m-4">
        <h1>Show Containers</h1>
    </div>

        <div class="m-4 text-center">
            <h2>
                Cliente: {{ $moves->cliente }}
            </h2>

            <p>
                Numero do Container: {{ $moves->numContainer }}
            </p>

            <p>
                Tipo: {{ $moves->tipo }}
            </p>

            <p>
                Status: {{ $moves->status }}
            </p>

            <p>
                Categoria: {{ $moves->categoria }}
            </p>
            <hr>

            {{-- @foreach ($movimentacaos as $moviment)
            @if ($moviment->moves_id == $moves->id)
            value="{{ $moves->cliente }}"
            @endif
            @endforeach> --}}
        </div>


@endsection
