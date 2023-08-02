@extends('layouts.plantilla')

@section('titulo')

	Registros totales

@endsection

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

    <h2 class="tituloLocales">Locales</h2>
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
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($locales as $local)
              <tr>
                  <td>{{$local->direccion}}</td>
                  <td>{{$local->universidad}}</td>
                  <td>{{$local->precio}}</td>
                  <td>{{$local->descripcion}}</td>
                  <td>{{$local->telefono}}</td>
                  <td>{{$local->correo}}</td>
                  <td><a href="{{route('registros.edit', $local)}}" class="editar">Editar</a></td>
                  <td>
                    <form action="{{route('registros.destroy', $local)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="eliminar">Eliminar</button>
                    </form>
                </td>
              </tr>   
    @endforeach
          </tbody>
        </table>
      </div>
      

@endsection
