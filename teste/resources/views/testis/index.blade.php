@extends('layouts.app')

@section('template_title')
    Testis
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Testis') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('testes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cliente</th>
										<th>Numcontainer</th>
										<th>Tipo</th>
										<th>Status</th>
										<th>Categoria</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testes as $testis)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $testis->cliente }}</td>
											<td>{{ $testis->numContainer }}</td>
											<td>{{ $testis->tipo }}</td>
											<td>{{ $testis->status }}</td>
											<td>{{ $testis->categoria }}</td>

                                            <td>
                                                <form action="{{ route('testes.destroy',$testis->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('testes.show',$testis->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('testes.edit',$testis->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $testes->links() !!}
            </div>
        </div>
    </div>
@endsection
