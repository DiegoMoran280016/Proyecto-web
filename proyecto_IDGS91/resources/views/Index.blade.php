@extends('plantilla')

@section('titulo')

	Inicio

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


@section('contenido1')
<section class="textos-header" id="head">
	<h1>Busca de locales</h1>
    <h2>Para alumnos Foraneos</h2>
</section>
@endsection

@section('marea')

        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>

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
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/depa2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/depa3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/depa4.png" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/depa5.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>

                </div>
            </div>

@endsection


@section('contenido4')

        <h2 class="titulo">Nuestros desarrolladores</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/ingeMeza.jpeg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Christian Meza</h4>
                        <p>Correo: devoper_CAMS@gmail.com</p> 
                        <p>Telefono: 311 791 XXXX</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/inge3.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Diego Moran</h4>
                        <p>Correo: devoper_DAMD@gmail.com</p> 
                        <p>Telefono: 311 195 XXXX</p>
                    </div>
                </div>
            </div>

            <br>

            <div class="cards">
                <div class="card">
                    <img src="img/ingeCeci.jpeg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Cecilia Quintero</h4>
                        <p>Correo: devoper_CEQA@gmail.com</p>
                        <p>Telefono: 311 109 XXXX</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/inge1.jpeg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Manuel Tarin</h4>
                        <p>Correo: devoper_MT@gmail.com</p> 
                        <p>Telefono: 311 155 XXXX</p>
                    </div>
                </div>
            </div>

@endsection
