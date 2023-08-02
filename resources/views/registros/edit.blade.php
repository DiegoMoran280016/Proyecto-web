@extends('layouts.plantilla')

@section('titulo')

	Editar registro

@endsection

@section('menu-nav')

@section('menu-nav')
<div class="navbar">
    <div class="left-links">
        <a href="/proyecto/public/home">Inicio</a>
        <a href="altas">Altas</a>
        <a href="showall">Actualizar</a>
    </div>
</div>
@endsection

@section('contenido2')
<form action="{{route('registros.update', $local)}}" method="post">

    @csrf
    @method('put')

<div class="containerForm">
  <div class="form-group">
    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" value="{{$local->direccion}}">
  </div>
  <div class="form-group">
    <label for="universidad">Universidad:</label>
    <input type="text" id="universidad" name="universidad" required value="{{$local->universidad}}">
  </div>
  <div class="form-group">
    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" step="0.01" required value="{{$local->precio}}">
  </div>
  <div class="form-group">
    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required>{{$local->descripcion}}</textarea>
  </div>
  <div class="form-group">
    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required value="{{$local->telefono}}">
    <small>Formato requerido: XXX-XXX-XXXX</small>
  </div>
  <div class="form-group">
    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" required value="{{$local->correo}}">
  </div>
  <div class="form-group">
    <a href="altas" class="cancel-button" onclick="limpiarFormulario()">Cancelar</a>
    <button class="submit">Actualizar</button>
  </div>
  </div>
</form>

@endsection