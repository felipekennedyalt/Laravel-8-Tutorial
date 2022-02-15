@extends('layouts.app')

@section('template_title')
    {{ $testis->name ?? 'Show Testis' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Testis</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('testes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $testis->cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Numcontainer:</strong>
                            {{ $testis->numContainer }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $testis->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $testis->status }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $testis->categoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
