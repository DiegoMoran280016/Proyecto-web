@extends('layouts.plantilla')

@section('titulo')

	Login

@endsection

@section('menu-nav')

<div class="navbar">
    <div class="left-links">
        <a href="home">Inicio</a>
    </div>
  </div>

@endsection

@section('contenido2')
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: white;">
    <div style="text-align: center; background-color: white; padding: 20px; border: 1px solid #ccc; border-radius: 10px; max-width: 400px;">
        <!-- Aquí puedes poner tu imagen -->
        <img src="img/proceso.png" alt="Imagen" style="max-width: 60%; height: auto;">

        <!-- Mensaje con etiqueta h2 -->
        <br><br>
        <h2>Por el cambio de version dejo inservible esta funcion</h2>
        <br>
        <h4>lamentamos los inconvenientes</h4>
        <br><br>
        <!-- Enlace con diseño más elegante -->
        <a href="altas" class="editar">Ingresar</a>
    </div>
</div>
@endsection
