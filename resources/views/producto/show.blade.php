@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo De Producto</strong>
                            {{ $producto->cod_product }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de Producto</strong>
                            {{ $producto->nameProd }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion De producto</strong>
                            {{ $producto->descProd }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo De Producto</strong>
                            {{ $producto->typeProd }}
                        </div>
                        <div class="form-group">
                            <strong>Costo Unitario</strong>
                            {{ $producto->costUnit }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Existente</strong>
                            {{ $producto->cantExist }}
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </section>
@endsection
