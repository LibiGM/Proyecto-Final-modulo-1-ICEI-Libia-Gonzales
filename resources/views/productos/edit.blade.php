@extends('layouts.app')

@section('content')
    <div>
        <div class="pull-left">
            <h2>Editar Producto</h2>
        </div>
    </div>
    <div>
        <form method="POST" action="{{ route('productos.update', $producto->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                <span class="input-group-text" id="code">Código</span>
                <input type="text" name="code" class="form-control" placeholder="Ingrese un código" aria-label="Code"
                    value="{{ $producto->code }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="name">Nombre</span>
                <input type="text" name="name" class="form-control" placeholder="Ingrese un nombre" aria-label="Name"
                    value="{{ $producto->name }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="description">Descripción</span>
                <input type="text" name="description" class="form-control" placeholder="Ingrese una descripción"
                    aria-label="Description" value="{{ $producto->description }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="unit">Unidades</span>
                <input type="number" name="unit" class="form-control" placeholder="Ingrese una cantidad"
                    aria-label="Unit" value="{{ $producto->unit }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="price">Precio</span>
                <input type="number" name="price" class="form-control" placeholder="Ingrese un precio" aria-label="Price"
                    value="{{ $producto->price }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="state">Estado</span>
                <select class="form-select" name="state" aria-label="State">
                    @if ($producto->state == 0)
                    <option value="1">Activo</option>
                    <option value="0" selected>Inactivo</option>
                    @else
                    <option value="1" selected>Activo</option>
                    <option value="0">Inactivo</option>
                    @endif                    
                </select>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a class="btn btn-secondary" href="{{ route('productos.index') }}">Regresar</a>
            </div>
        </form>
    </div>
@endsection
