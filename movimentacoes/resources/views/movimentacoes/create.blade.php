@extends('layouts.app')

@section('conteudo')

<div>
    <h1 class="text-center text-white m-4">Adicionar Movimentações</h1>
    <div class="block m-4">
        <form action="/movimentacoes" method="POST">
            @csrf
            <input type="text" name="tipoMov" placeholder="Tipo de movimentação...">
            <input type="time" name="horaInicio" placeholder="Hora de inicio...">
            <input type="time" name="horaFim" placeholder="Hora de Término...">
            <button type="submit" class="bg-success text-white border">Salvar</button>
        </form>

    </div>
</div>
@endsection