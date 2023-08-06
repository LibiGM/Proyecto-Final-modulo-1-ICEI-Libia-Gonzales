
<php
@echo 'hola mundo';
?>
@extends('layouts.app')
@section('content')
        <div>
    <form method="POST" action="{{ route('productos.store') }}" encrype="multipart/from-data">
        @csrf
        <div class="input-group mb-3">
        <span class="input-group-text" id="code">Código</span>
  <input type="text" name="code" class="form-control" placeholder="Ingrese un código" aria-label="Code">
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text" id="name">nombre</span>
  <input type="text" name="name" class="form-control" placeholder="Ingrese un Nombre" aria-label="Name">
        </div>
        
        <div class="input-group mb-3">
        <span class="input-group-text" id="description">Descripcion</span>
  <input type="text" name="description" class="form-control" placeholder="Ingrese una descripción" aria-label="Description">
        </div>
        
        <div class="input-group mb-3">
        <span class="input-group-text" id="unit">Unidades</span>
  <input type="number" name="unit" class="form-control" placeholder="Ingrese unidades" aria-label="Unit">
        </div>
        
        <div class="input-group mb-3">
        <span class="input-group-text" id="price">Precio</span>
  <input type="number" name="price" class="form-control" placeholder="Ingrese un código" aria-label="Price">
        </div>
        
        
        <div class="input-group mb-3">
                <span class="input-group-text" id="state">Estado</span>
                <select class="form-select" name="state" aria-label="State">
                    <option value="1" selected>Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>      
        <button type="submit" class="btn btn-outline-primary">Guardar</button>
        
    </from>

  </tbody>
            </div>
            
@endsection