@extends('layouts.app')

@section('conteudo')
    <h1 class="text-center m-4">Adicionar Containers</h1>

    <form action="/moves" method="POST" class="form">
        @csrf

        <div class="row m-4">
            <div class="col">
                <input type="text" class="form-control" placeholder="Cliente" name="cliente">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Numerro do container" name="numContainer">
            </div>
        </div>

        <div class="row m-4">
            <div class="col">
                <input type="number" class="form-control" placeholder="Tipo" name="tipo">
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="Status" name="status">
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="Categoria" name="categoria">
            </div>

            <button type="submit" class="col btn btn-primary">Salvar</button>
        </div>


    </form>
@endsection
