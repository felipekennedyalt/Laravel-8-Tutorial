@extends('layouts.app')

@section('conteudo')

    <div class="m-auto">
        <div class="text-center">
            <h1 class="uppercase text-center p-4 text-white">
                Editar Contêiner
            </h1>
        </div>
    </div>

    <div>
        <form action="/containers/{{ $container->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="block  p-4">
                <input type="text" name="cliente" id="" value="{{ $container->cliente }}">

                <input type="text" name="numContainer" id="" value="{{ $container->numContainer }}">

                <input type="number" name="tipo" id="" value="{{ $container->tipo }}">

                <input type="text" name="status" id="" value="{{ $container->status }}">

                <input type="text" name="categoria" id="" value="{{ $container->categoria }}">

                <button class="bg-success text-white" type="submit"> Salvar</button>
            </div>
        </form>
    </div>
@endsection
