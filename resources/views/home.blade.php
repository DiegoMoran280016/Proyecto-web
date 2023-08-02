@extends('layouts.plantilla')

@section('titulo')

	Inicio

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


@section('contenido1')
<section class="textos-header" id="head">
	<h1>Busca de locales</h1>
    <h2>Para alumnos Foraneos</h2>
</section>
@endsection


@section('contenido2')

	<h2 class="titulo">Acerca de la pagina</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/logo.png" alt="" class="logot">
                <div class="contenido-textos">
                    <h3><span>!</span>Propósito</h3>
                    <p>El propósito de esta página web es el apoyar a todo los alumnos universitarios los cuales s adapten a sus necesidades como el salario, espacio y distancia de su departamento a su universidad, el origen de esta página es que esta problemática sea resuelta haciendo la tarea de que tanto como el alumno como el casero puedan adaptarse a la nueva era tecnológica y así mantener la oportunidad de culminar los estudios universitarios como el mantenimiento de este tipo de trabajo de la renta de locales e incluso otros como loncherías, restaurantes, cafeterías, abarrotes, lavanderías o bares que al igual se encuentren cerca de los locales para que el alumnos quiera cubrir alguna de esas necesidades.</p>
                    
                </div>
            </div>

@endsection


@section('contenido3')

<div class="contenedor">
    <h2 class="titulo">Encuentra lo que se ajuste a tus necesidades</h2>
    <div class="catalog-grid">
        <div class="product-card">
          <img src="img/depa1.jpg" alt="Producto 1">
          <div class="product-description">
            <p>Buscas algo simple.</p>
          </div>
        </div>
        <div class="product-card">
            <img src="img/depa2.jpg" alt="Producto 1">
            <div class="product-description">
              <p>Algo más comodo en base a tus necesidades.</p>
            </div>
          </div>
          <div class="product-card">
            <img src="img/depa4.png" alt="Producto 1">
            <div class="product-description">
              <p>Algo pequeño y comodo a la vez.</p>
            </div>
          </div>
          <div class="product-card">
            <img src="img/depa5.jpg" alt="Producto 1">
            <div class="product-description">
              <p>O algo que se pueda adaptar a tus ingresos.</p>
            </div>
          </div>
        <!-- Agrega más productos aquí -->
      </div>      
</div>

@endsection


