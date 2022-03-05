@extends('layouts.app')

@section('conteudo')
    <h1 class="text-center m-4">Adiciona Movimentação</h1>



    <div class="m-4">
        <form action="/movin" method="POST" class="form row">
            @csrf

            <div class="col">
                <select name="moves_id" class="form-control">
                    <option>Cliente</option>
                    <!--selected by default-->
                    @foreach ($movimentacaos as $movi)
                        @foreach ($moves as $move)
                            @if ($move->id !== null)
                                <option value="{{ $move->id }}">
                                    {{ $move->id }} - {{ $move->cliente }}
                            @endif
                        @endforeach
                    @endforeach
                </select>

            </div>

            <div class="col">
                <input type="text" class="form-control" name="tipoMov" placeholder="Tipo de movimentação">
            </div>

            <div class="col">
                <input type="datetime-local" class="form-control" name="inicio" placeholder="Inicio da movimentação">
            </div>

            <div class="col">
                <input type="datetime-local" class="form-control" name="fim" placeholder="Fim da movimentação">
            </div>

            <div class="col">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>

    </div>
@endsection
