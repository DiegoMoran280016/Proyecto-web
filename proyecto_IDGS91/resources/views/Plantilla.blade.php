<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

{{-- ___________________________________________ --}}
    	@yield('titulo')
{{-- ___________________________________________ --}}

    </title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/log.css">
    <link rel="stylesheet" type="text/css" href="css/tabla.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>

<body>
    <header>

{{-- ___________________________________________ --}}
            @yield('menu-nav')
{{-- ___________________________________________ --}}

        
        

{{-- ___________________________________________ --}}
            @yield('header_2')
{{-- ___________________________________________ --}}


{{-- ___________________________________________ --}}
            @yield('contenido1')
{{-- ___________________________________________ --}}

{{-- ___________________________________________ --}}
            @yield('marea')
{{-- ___________________________________________ --}}

    </header>


    <main>
        <section class="contenedor sobre-nosotros">

{{-- ___________________________________________ --}}
        	@yield('contenido2')
{{-- ___________________________________________ --}}

        </section>

        <section class="portafolio">

{{-- ___________________________________________ --}}
            @yield('contenido3')
{{-- ___________________________________________ --}}

        </section>
        <section class="clientes contenedor">


{{-- ___________________________________________ --}}
            @yield('contenido4')
{{-- ___________________________________________ --}}

        </section>



    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Telefono</h4>
                <p>8296312</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>atencion_apf2022@gmail.com</p>
            </div>
            <div class="content-foo" >
                <h4>Redes</h4>
                <img src="img/facebook.png" class="redes"><p>Facebook</p>
                <br>
                <img src="img/instagram.png" class="redes"><p>Instagram</p>
                <br>
                <img src="img/twitter.png" class="redes"><p>Twitter</p>
            </div>
        </div>
        <h2 class="titulo-final">Apoyo a alumnos foraneos</h2>
    </footer>
</body>

</html>