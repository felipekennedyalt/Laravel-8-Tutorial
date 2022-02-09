@extends('layouts.app')

@section('conteudo')

    <div class="m-auto">
        <div class="text-center">
            <h1 class="uppercase text-center p-4 text-white">
                Cadastrar Contêiner
            </h1>
        </div>
    </div>

    <div>
        <form action="/containers" method="POST">
            @csrf
            <div class="block  p-4">
                <input type="text" name="cliente" id="" placeholder="Cliente...">

                <input type="text" name="numContainer" id="" placeholder="Número do Contêiner...">

                <input type="number" name="tipo" id="" placeholder="Tipo...">

                <input type="text" name="status" id="" placeholder="Status...">

                <input type="text" name="categoria" id="" placeholder="Categoria...">

                <button class="bg-success text-white" type="submit"> Salvar</button>
            </div>
        </form>
    </div>
@endsection
