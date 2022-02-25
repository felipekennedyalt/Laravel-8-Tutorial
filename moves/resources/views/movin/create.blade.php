@extends('layouts.app')

@section('conteudo')
    <h1 class="text-center m-4">Adiciona Movimentação</h1>
    
        <div class="m-4">
            <form action="/movin" method="POST" class="form row">
                @csrf

                <div class="col">
                    <input type="s" class="form-control" name="cliente"
                    @foreach ($movimentacaos as $moviment)
                    @if ($moviment->moves_id == $moves->id)
                    value="{{ $moves->cliente }}"
                    @endif
                    @endforeach>
         
    
                </div>

                <div class="col">
                    <input type="text" class="form-control" name="tipoMov" placeholder="Tipo de movimentação">
                </div>

                <div class="col">
                    <input type="datetime-local" class="form-control" name="inicio" placeholder="Inicio da movimentação">
                </div>

                <div class="col">
                    <input type="datetime-local" class="form-control" name="Fim" placeholder="Fim da movimentação">
                </div>

                <div class="col">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
    
    </div>
@endsection
