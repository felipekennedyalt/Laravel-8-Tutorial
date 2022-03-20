@extends('layouts.app')

@section('conteudo')
    <h1 class="m-4 text-center">Movimentação</h1>

    <div class="row m-4">
        <div class="col">
            <a href="/moves" class="m-4 btn btn-primary">Containers</a>
        </div>

        <div class="col">
            <a href="movin/create" class="m-4 btn btn-primary" role="button"> Adicionar Movimentação</a>
        </div>

        <div class="col">
            <a href="/filtroMov" class="m-4 btn btn-primary" role="button">Procurar</a>
        </div>

    </div>



    <table class="table table-bordered table-hover">
        <thead>
            <th>Cliente</th>
            <th>Tipo de Movimentação</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>
                <form action="/orderByMov" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-info">Ordem por Data</button>
                </form>
            </th>
        </thead>
        <tbody>
            @if ($moves->count() == 0)
                <tr aria-colspan="5">não há nada aqui</tr>
            @endif

            @foreach ($movimentacaos as $movi)
                @foreach ($moves as $move)
                    @if ($movi->moves_id == $move->id)
                        <tr>
                            <td>{{ $move->cliente }}</td>
                            <td>{{ $movi->tipoMov }}</td>
                            <td>{{ $movi->inicio }}</td>
                            <td>{{ $movi->fim }}</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a href="movin/{{ $movi->id }}/edit" class="m-auto btn btn-success">Editar</a>
                                    </div>

                                    <div class="col">
                                        <form action="movin/{{ $movi->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="m-auto btn btn-danger">Deletar</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach
            @endforeach
        </tbody>
    </table>
    <p class="m-auto">Mostrando {{ $movimentacaos->count() }} de {{ $movimentacaos->total() }} movimentações</p>
    <p class="m-auto">{{ $movimentacaos->links('pagination::bootstrap-5') }}</p>
@endsection
