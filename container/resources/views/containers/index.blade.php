@extends('layouts.app')

@section('conteudo')
    <div>
        <div class="uppercase text-center p-4 text-white">
            <h1>Contêiner</h1>
        </div>

        <div>
            <a href="containers/create" class="rounded bg-primary text-light border m-2">
                Adicionar contêiner</a>
        </div>

        <div class="uppercase text-white m-2">
            @foreach ($containers as $container)
                <div>
                    <a href="containers/{{ $container->id }}/edit"
                        class="rounded bg-success text-light border m-2">Edit</a>

                    <form action="/containers/{{ $container->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="rounded bg-danger text-light border m-2" type=" submit">Deletar</button>
                    </form>


                </div>
                <h3 class="text-primary shadow-sm bg-white">
                    Cliente: {{ $container->cliente }}
                </h3>
                <p>
                    Número do contêiner: {{ $container->numContainer }}
                </p>
                <p>
                    Tipo: {{ $container->tipo }}
                </p>
                <p>
                    Status: {{ $container->status }}
                </p>
                <p>
                    Categoria: {{ $container->categoria }}
                </p>
                <hr class="m-2">
            @endforeach

        </div>

    </div>
@endsection
