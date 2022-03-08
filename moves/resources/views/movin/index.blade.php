@extends('layouts.app')

@section('conteudo')
    <h1 class="m-4 text-center">Movimentação</h1>

    <a href="/moves" class="m-4 btn btn-primary">Containers</a>

    <div>
        <a href="movin/create" class="m-4 btn btn-primary" role="button"> Adicionar Movimentação</a>
    </div>

    {{-- @foreach ($movimentacaos as $moviment)
        @forelse ($moves as $move)
            @if ($moviment->moves_id == $move->id)
                <div class="m-4">
                    <h3>
                        Nome do cliente: {{ $move->cliente }}
                    </h3>

                    <p>
                        Tipo de Movimentação: {{ $moviment->tipoMov }}
                    </p>
                    <p>
                        Inicio da movimentação: {{ $moviment->inicio }}
                    </p>
                    <p>
                        Fim da movimentação: {{ $moviment->fim }}
                    </p>

                    <div class="row">
                        <div class="col">
                            <a href="movin/{{ $moviment->id }}/edit" class="m-4 btn btn-success">Editar</a>
                        </div>

                        <div class="col">
                            <form action="movin/{{ $moviment->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="m-4 btn btn-danger">Deletar</button>
                            </form>
                        </div>



                    </div>


                    <hr>
                </div>
            @endif

        @empty
            {{ ERRO }}
        @endforelse
    @endforeach --}}

    <table class="table table-bordered table-hover">
        <thead>
            <th>Cliente</th>
            <th>Tipo de Movimentação</th>
            <th>Inicio</th>
            <th>Fim</th>
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
