@extends('layouts.app')

@section('conteudo')
    <div class="text-center m-4">
        <h1>Containers</h1>
    </div>

    <a href="/movin" class="m-4 btn btn-primary">Movimentações</a>

    <div>
        <a href="moves/create" class="m-4 btn btn-primary" role="button"> Adicionar container</a>
    </div>
    {{-- @foreach ($moves as $move)
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
         @endforeach --}}

    {{-- <table class="table table-bordered table-hover">
        <thead>
            <th>Cliente</th>
            <th>Numero</th>
            <th>Tipo</th>
            <th>Status</th>
            <th>categoria</th>
        </thead>
        <tbody>
            @if ($moves->count() == 0)
                <tr>
                    <td colspan="5">Não há nada aqui.</td>
                </tr>
            @endif

            @foreach ($moves as $move)
                <tr>
                    <td>{{ $move->cliente }}</td>
                    <td>{{ $move->numContainer }}</td>
                    <td>{{ $move->tipo }}</td>
                    <td>{{ $move->status }}</td>
                    <td>
                        {{ $move->categoria }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>
        Displaying {{ $moves->count() }} of {{ $moves->total() }} product(s).
    </p>
    <p>{{ $moves->links() }}</p> --}}

    {{-- <table class="table table-bordered table-hover">
        <thead>
            <th>Cliente</th>
            <th>Numero</th>
            <th>Tipo</th>
            <th>Status</th>
            <th>categoria</th>
        </thead>
        <tbody>
            @if ($moves->count() == 0)
                <tr aria-colspan="5">não há nada aqui</tr>
            @endif
            @foreach ($moves as $move)
                <tr>
                    <td>{{ $move->cliente }}</td>
                    <td>{{ $move->numContainer }}</td>
                    <td>{{ $move->tipo }}</td>
                    <td>{{ $move->status }}</td>
                    <td>{{ $move->categoria }}</td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <a href="moves/{{ $move->id }}/edit" class="m-1 btn btn-success" role="button">
                                    Editar</a>
                            </div>
                            <div class="col">
                                <form class="" action="/moves/{{ $move->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="m-1 col btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>


                </tr>
            @endforeach
        </tbody>
    </table>
 
    <p>Mostrando {{ $moves->count() }} de {{ $moves->total() }} Containers.</p>
    <p>{{ $moves->links() }}</p> --}}

    <form action="/orderBy" method="GET">
        @csrf
        <button type="submit">orderBy</button>
        <hr>
    </form>

    @foreach ($moves as $move)
        <div class="m-4">
            <p>{{ $move->cliente }}</p>
        </div>
    @endforeach
@endsection
