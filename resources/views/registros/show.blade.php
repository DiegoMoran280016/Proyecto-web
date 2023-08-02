@extends('layouts.plantilla')

@section('titulo', )

	Registro

@endsection

@section('menu-nav')
<div class="navbar">
    <div class="left-links">
        <a href="/proyecto/public/home">Inicio</a>
        <a href="/proyecto/public/altas">Altas</a>
        <a href="/proyecto/public/showall">Actualizar</a>
    </div>
</div>
@endsection

@section('contenido2')

<h2 class="tituloLocales">Registro final</h2>
<div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Dirección</th>
          <th>Universidad</th>
          <th>Precio</th>
          <th>Descripción</th>
          <th>Teléfono</th>
          <th>Correo</th>
          <th>Opcion</th>
        </tr>
      </thead>
      <tbody>
          <tr>
              <td>{{$local->direccion}}</td>
              <td>{{$local->universidad}}</td>
              <td>{{$local->precio}}</td>
              <td>{{$local->descripcion}}</td>
              <td>{{$local->telefono}}</td>
              <td>{{$local->correo}}</td>
              <td><a href="{{route('registros.edit', $local)}}" class="editar">Reeditar</a></td>
          </tr>   

      </tbody>
    </table>
  </div>
    
@endsection
