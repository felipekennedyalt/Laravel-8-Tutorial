@extends('layouts.app')

@section('conteudo')
    <h1 class="text-center m-4">
        Pesquisar Tipo de Movimentação
    </h1>

    <div class="m-4">
        <form action="/filtroMov" method="GET">
            @csrf
            <input type="search" name="filtroTipoMov" id="">

            <button type="submit" class="btn btn-primary">procurar</button>
        </form>
    </div>

    @foreach ($filtradoMov as $filter)
        <div class="m-4">
            <p>
                Cliente: {{ $filter->tipoMov }}
            </p>
        </div>
    @endforeach

    <div> 
        <a href="/movin" class="btn btn-primary m-4 ">Voltar</a>
    </div>
    
@endsection
