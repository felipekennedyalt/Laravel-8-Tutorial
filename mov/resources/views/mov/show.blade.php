@extends('layouts.app')

@section('template_title')
    {{ $mov->name ?? 'Show Mov' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Mov</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('movs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $mov->cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Numcontainer:</strong>
                            {{ $mov->numContainer }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $mov->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $mov->status }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $mov->categoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
