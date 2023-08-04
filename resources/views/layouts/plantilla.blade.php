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
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

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

    </section>

    <section class="portafolio">

{{-- ___________________________________________ --}}
        @yield('contenido5')
{{-- ___________________________________________ --}}

    </section>
    <section class="clientes contenedor">


{{-- ___________________________________________ --}}
        @yield('contenido6')
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
        </div>
        <h2 class="titulo-final">Apoyo a alumnos foraneos</h2>
    </footer>

    


<script>
    function limpiarFormulario() {
      // Obtenemos todos los elementos del formulario
      const formulario = document.getElementById('formulario');
      const elementos = formulario.elements;
  
      // Recorremos los elementos y restablecemos sus valores
      for (let i = 0; i < elementos.length; i++) {
        const elemento = elementos[i];
  
        // Solo restablecemos los campos de texto, número, textarea y correo
        if (elemento.type === 'text' || elemento.type === 'number' || elemento.type === 'textarea' || elemento.type === 'email') {
          elemento.value = '';
        }
      }
    }
  </script>
</body>

</html>