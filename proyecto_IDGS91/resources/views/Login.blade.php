@extends('plantilla')

@section('titulo')

	Login

@endsection

@section('menu-nav')

        <nav class="nav">
            <a href="/">Inicio</a>
        </nav>

@endsection

@section('contenido2')

    <section class="form-login">
      <h5>Formulario Login</h5>
      
    <form method="POST" action="{{route('login')}}">
    @csrf
    {!! $errors->first('usuario', '<small>:message</small><br>')!!}
        <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
        {!! $errors->first('contraseña', '<small>:message</small><br>')!!}
        <input class="controls" type="password" name="contraseña" value="" placeholder="Contraseña">
        <button href="/altas" class="buttons">Ingresar</button>

    </form>
      

@endsection