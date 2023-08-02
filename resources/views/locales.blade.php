@extends('layouts.plantilla')

@section('titulo')

	Locales

@endsection

@section('menu-nav')

        <div class="navbar">
            <div class="left-links">
                <a href="home">Inicio</a>
                <a href="locales">Locales</a>
                <a href="universidades">Universidades</a>
                <a href="puntos">Puntos de interés</a>
            </div>
            <div class="right-link">
                <a href="login" id="login">Ingresar</a>
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
              </tr>   
    @endforeach
          </tbody>
        </table>
      </div>
      

@endsection
