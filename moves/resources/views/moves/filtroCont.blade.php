@extends('layouts.app')

@section('conteudo')
    <h1 class="text-center m-4">
        Pesquisar Cliente
    </h1>

    <div class="m-4">
        <form action="/filtroCont" method="GET">
            @csrf
            <input type="search" name="filtroNome" id="">

            <button type="submit" class="btn btn-primary">procurar</button>
        </form>
    </div>

    @foreach ($filtradoCont as $filter)
        <div class="m-4">
            <p>
                Cliente: {{ $filter->cliente }}
            </p>
        </div>
    @endforeach

    <div> 
        <a href="/moves" class="btn btn-primary m-4 ">Voltar</a>
    </div>
    
@endsection
