@extends('layouts.app')

@section('conteudo')
    <div class="text-center m-4">
        <h1>Containers</h1>
    </div>

    <div class="row">
        <div class="col">
            <a href="/movin" class="m-4 btn btn-primary">Movimentações</a>
        </div>

        <div class="col">
            <a href="moves/create" class="m-4 btn btn-primary" role="button"> Adicionar container</a>

        </div>

        <div class="col">
            <a href="/filtroCont" class="m-4 btn btn-primary" role="button"> Procurar</a>
        </div>

    </div>



    <table class="table table-bordered table-hover">
        <thead>
            <th>Cliente</th>
            <th>Numero</th>
            <th>Tipo</th>
            <th>Status</th>
            <th>categoria</th>
            <th>
                <form action="/orderBy" method="GET">
                    @csrf
                    <button type="submit" class="m-auto btn btn-info">Ordenar por Nome</button>
                </form>
            </th>
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

    <div class="m-4">
        <p>Mostrando {{ $moves->count() }} de {{ $moves->total() }} Containers.</p>
        <p>{{ $moves->links('pagination::bootstrap-5') }}</p>
    </div>
@endsection
