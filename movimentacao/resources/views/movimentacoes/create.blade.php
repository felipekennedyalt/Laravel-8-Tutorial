@extends('layouts.app')

@section('conteudo')
    <div class="text-white text-center m-4">
        <h1>Adicionar Movimentção</h1>
    </div>

    <div class="m-4">
        <form action="/movimentacoes" method="post">
            <input type="text" name="tipoMov" id="" placeholder="Tipo de movimentação...">
            <input type="time" name="horaInicio" id="" placeholder="Hora de inicio...">
            <input type="time" name="horaFim" id="" placeholder="Hora de término...">

            <input type="submit" value="Salvar" class="bg-success text-white border">
        </form>
    </div>
@endsection
