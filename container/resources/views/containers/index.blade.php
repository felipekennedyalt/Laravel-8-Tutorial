@extends('layouts.app')

@section('conteudo')
    <div>
        <div class="uppercase text-center p-4 text-white">
            Contêiner
        </div>

        <div>
            <a href="containers/create" class="rounded bg-success text-light border m-2">
                adicionar contêiner</a>
        </div>

        <div class="uppercase text-white m-2">
            <p>
                Cliente: Felipe
            </p>
            <p>
                Número do contêiner: TEST1234567
            </p>
            <p>
                Tipo: 20 / 40
            </p>
            <p>
                Status: Cheio / Vazio
            </p>
            <p>
                Categoria: Importação / Exportação
            </p>
            <hr class="m-2">

        </div>

    </div>
@endsection
