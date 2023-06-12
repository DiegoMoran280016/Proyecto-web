@extends('plantilla')

@section('titulo')

	Altas

@endsection

@section('menu-nav')

        <nav class="nav">
            <a href="/">Inicio</a>
        </nav>

@endsection

@section('contenido2')

    <section class="form-login">
      <h5>Altas</h5>
      <form method="POST" action="{{route('locales.store')}}">
        @csrf
        <label>Dirección:<br>
            <input class="controls" type="text" name="direccion" placeholder="Escribir…">
        </label>

        <label>Universidad:<br>
            <input class="controls" type="text" name="universidad"  placeholder="Escribir…">
        </label>


        <label>Precio:<br>
            <input class="controls" type="text" name="precio" placeholder="Escribir…">
        </label>


        <label>Descripción:<br>
            <input class="controls" type="text" name="descripcion" placeholder="Escribir…">
        </label>


        <label>Teléfono:<br>
            <input class="controls" type="text" name="telefono" placeholder="Escribir…">
        </label>
      
        <label>Correo:<br>
            <input class="controls" type="text" name="correo" placeholder="Escribir…">
        </label>
            
      <button class="buttons">Guardar</button>
      </form>
@endsection