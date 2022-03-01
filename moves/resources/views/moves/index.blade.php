@extends('layouts.app')

@section('conteudo')
    <div class="text-center m-4">
        <h1>Containers</h1>
    </div>

    <div>
        <a href="moves/create" class="m-4 btn btn-primary" role="button"> Adicionar container</a>
    </div>
    {{-- @foreach ($moves as $move)
        <div class="m-4">
            <h2>
                Cliente:
                <a href="/moves/{{ $move->id }}" class="text-decoration-none">{{ $move->cliente }}</a>
            </h2>

            <p>
                Numero do Container: {{ $move->numContainer }}
            </p>

            <p>
                Tipo: {{ $move->tipo }}
            </p>

            <p>
                Status: {{ $move->status }}
            </p>

            <p>
                Categoria: {{ $move->categoria }}
            </p>


            <a href="moves/{{ $move->id }}/edit" class="col m-4 btn btn-success" role="button"> Editar</a>


            <form class="m-auto" action="/moves/{{ $move->id }}" method="POST">
                @csrf
                @method('delete')
                <button class="col m-4 btn btn-danger" type="submit">Delete</button>
            </form>

            <hr>
           
        </div> 
         @endforeach --}}

    {{-- <table class="table table-bordered table-hover">
        <thead>
            <th>Cliente</th>
            <th>Numero</th>
            <th>Tipo</th>
            <th>Status</th>
            <th>categoria</th>
        </thead>
        <tbody>
            @if ($moves->count() == 0)
                <tr>
                    <td colspan="5">Não há nada aqui.</td>
                </tr>
            @endif

            @foreach ($moves as $move)
                <tr>
                    <td>{{ $move->cliente }}</td>
                    <td>{{ $move->numContainer }}</td>
                    <td>{{ $move->tipo }}</td>
                    <td>{{ $move->status }}</td>
                    <td>
                        {{ $move->categoria }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>
        Displaying {{ $moves->count() }} of {{ $moves->total() }} product(s).
    </p>
    <p>{{ $moves->links() }}</p> --}}

    <form class="form-inline" method="GET">
        <div class="form-group mb-2">
          <label for="filter" class="col-sm-2 col-form-label">Filter</label>
          <input type="text" class="form-control" id="filter" name="filter" placeholder="Product name..." value="{{$filter}}">
        </div>
        <button type="submit" class="btn btn-default mb-2">Filter</button>
      </form>

    <table class="table table-bordere table-hover">
        <thead>
            <th>Cliente</th>
            <th>Numero</th>
            <th>Tipo</th>
            <th>Status</th>
            <th>categoria</th>
        </thead>
        <tbody>
            @if ($moves->count() == 0)
                <tr aria-colspan="5">não há nada aqui</tr>
            @endif
            @foreach ($moves as $move)
                <tr>
                    <td>{{ $move->cliente }}</td>
                    <td>{{ $move->numContainer }}</td>
                    <td>{{ $move->tipo }}</td>
                    <td>{{ $move->status }}</td>
                    <td>{{ $move->categoria }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Mostrando {{ $moves->count() }} de {{ $moves->total() }} Containers.</p>
    <p>{{ $moves->links() }}</p>
@endsection
