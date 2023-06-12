@extends('plantilla')

@section('titulo')

	Locales

@endsection

@section('menu-nav')

        <nav class="nav">
            <a href="/">Inicio</a>
            <a href="/locales">Locales</a>
            <a href="/universidades">Universidades</a>
            <a href="/puntos de interes">Puntos de interés</a>
            <a href="/login" id="login">Ingresar</a>
        </nav>

@endsection

@section('contenido2')

    <h2 class="titulo">Locales</h2>
    <table>
        <tr class="trD">
            <td>Dirección</td>
            <td>Universidad</td>
            <td>Precio</td>
            <td>Descripción</td>
            <td>Teléfono</td>
            <td>Correo</td>
        </tr>
    @foreach($depa as $depas)
        <tr class="tdD">
            <td>{{$depas->direccion}}</td>
            <td>{{$depas->universidad}}</td>
            <td>{{$depas->precio}}</td>
            <td>{{$depas->descripcion}}</td>
            <td>{{$depas->telefono}}</td>
            <td>{{$depas->correo}}</td>
        </tr>   
    @endforeach
    </table>

@endsection
