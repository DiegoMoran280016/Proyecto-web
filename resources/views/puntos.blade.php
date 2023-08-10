@extends('layouts.plantilla')

@section('titulo')

	Puntos de Interes

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

	<h2 class="tituloLocales">Puntos de interes</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/centro.jpg" alt="" class="imagen-about-us-2">
                <div class="contenido-textos">
                    <h3><span>1</span>Centros comerciales</h3>
                    <p>Si deseas buscar comprar accesorios para tu hogar o incluso para tu escuela, te presentamos las siguientes ubicaciones para que el regreso a clases no te falte nada.</p>
                    <a href="https://www.google.com.mx/maps/search/centro+comercial" target="_blank"><p>Buscar en la zona.</p></a>
                </div>
            </div>


            <br><br><br><br><br>
            <div class="contenedor-sobre-nosotros">
                <img src="img/cafeteria.jpg" alt="" class="imagen-about-us-2">
                <div class="contenido-textos">
                    <h3><span>2</span>Cafeterías</h3>
                    <p>Si gustas de pasar un rato agradable, olvidarte de todo, tu mejor opción es un café calientito, te presentamos las siguientes ubicaciones para que puedas poder relajarte con tu capuchino.</p>

                    <a href="https://www.google.com.mx/maps/search/cafeterias" target="_blank"><p>Buscar en la zona.</p></a>
                    
                </div>
            </div>


            <br><br><br><br><br>
            <div class="contenedor-sobre-nosotros">
                <img src="img/supermercado.jpeg" alt="" class="imagen-about-us-2">
                <div class="contenido-textos">
                    <h3><span>3</span>Supermercados</h3>
                    <p>Tenemos gran variedad de verduras y frutas para tu hogar, ven a hora mismo y llévate por la compra de 2 pagas solo 1, te presentamos las siguientes ubicaciones para que tu refrigerador esté super lleno.</p>
                    <a href="https://www.google.com.mx/maps/search/supermercados" target="_blank"><p>Buscar en la zona.</p></a>
                </div>
            </div>


            <br><br><br><br><br>
            <div class="contenedor-sobre-nosotros">
                <img src="img/cines.jpg" alt="" class="imagen-about-us-2">
                <div class="contenido-textos">
                    <h3><span>4</span>Cines</h3>
                    <p>Al precio de 2 boletos te regalamos uno, ven hoy mismo para que puedas disfrutar de unas palomitas y unos refrescos para que puedas pasar tiempo con tus amigos, te esperamos. Te presentamos las siguientes ubicaciones de cines para que no te pierdas ningún estreno de las películas. </p>
                    <a href="https://www.google.com.mx/maps/search/cines" target="_blank"><p>Buscar en la zona.</p></a>
                </div>
            </div>

            <br><br><br><br><br>
            <div class="contenedor-sobre-nosotros">
                <img src="img/parques.jpg" alt="" class="imagen-about-us-2">
                <div class="contenido-textos">
                    <h3><span>5</span>Parques</h3>
                    <p>Deseas buscar alguna actividad recreativa con tus amigos, familias, o incluso con tu pareja, te presentamos las siguientes ubicaciones de parques para que puedas pasar tiempo con tus seres queridos.</p>
                    <a href="https://www.google.com.mx/maps/search/parques" target="_blank"><p>Buscar en la zona.</p></a>
                </div>
            </div>


           <br><br><br><br><br>
            <div class="contenedor-sobre-nosotros">
                <img src="img/gym.jpg" alt="" class="imagen-about-us-2">
                <div class="contenido-textos">
                    <h3><span>6</span>Gimnasios</h3>
                    <p>Si te quieres poner en forma, ven a nuestros gimnasios para que te puedas ejercitar de cualquier parte de tu cuerpo, te presentamos las siguientes ubicaciones para que puedas hacer ejercicio.</p>
                    <a href="https://www.google.com.mx/maps/search/gimnasio" target="_blank"><p>Buscar en la zona.</p></a>
                </div>
            </div>

@endsection