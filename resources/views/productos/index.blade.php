
<php
@echo 'hola mundo';
?>
@extends('layouts.app')
@section('content')
<br><br>
<h1>Integración de CRUD Productos en el proyecto</h1>
<br>
<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-ini">
      <a href="{{ route('productos.create') }}" class="btn btn-success">Crear</a>
      </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">codigo</th>
      <th scope="col">nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Unidades</th>
      <th scope="col">Precio</th>
      <th scope="col">Estado</th>
      <th scope="col">operaciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($productos as $item)
    <tr>
      <th scope="row">1</th>
      <td>{{$item->code }}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->unit}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->state}}</td>
      <td>        
      <form action="{{ route('productos.destroy', $item) }}" method="POST">
                                    <a class="btn btn-info active" href="{{ route('productos.edit', $item) }}">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection