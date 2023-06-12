@extends('plantilla')

@section('titulo')

	Universidades

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

	<h2 class="titulo">Universidades</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/ut.jpg" alt="" class="imagen-about-us-2">
                <div class="contenido-textos">
                    <h3><span>1</span>Universidad Tecnológica de Nayarit</h3>
                    <p>En la Universidad Tecnológica de Nayarit estamos comprometidos en mejorar e innovar nuestro Sistema Integral de Calidad bajo la norma ISO 9001:2015, orientado a brindar servicios educativos de calidad, mediante un modelo pertinente de formación integral, incorporando funciones sustantivas de investigación, extensión universitaria, vinculación con el sector productivo y social que impacte en el entorno.</p>
                    <a href="https://www.utnay.edu.mx/" target="_blank"><p>Para más información.</p></a>
                </div>
            </div>


            <br><br><br><br>
            <div class="contenedor-sobre-nosotros">
                <img src="img/uan.png" alt="" class="imagen-about-us-2">
                <div class="contenido-textos">
                    <h3><span>2</span>Universidad Autónoma de Nayarit</h3>
                    <p>La Universidad Autónoma de Nayarit, es una institución pública comprometida con la formación integral de estudiantes de nivel medio superior y superior, la generación, conservación y divulgación del saber de todas las áreas del conocimiento, así como con la extensión de los servicios, la promoción de la cultura y las manifestaciones artísticas; con un alto sentido de responsabilidad social, principios y valores universitarios para el desarrollo de una sociedad sustentable, más justa, equitativa y democrática.</p>

                    <a href="https://www.uan.edu.mx/" target="_blank"><p>Para más información.</p></a>
                    
                </div>
            </div>


            <br><br><br><br>
            <div class="contenedor-sobre-nosotros">
                <img src="img/tec.png" alt="" class="imagen-about-us-2">
                <div class="contenido-textos">
                    <h3><span>3</span>Intituto Tecnológico de Tepic</h3>
                    <p>El Instituto Tecnológico de Tepic es un centro que se ha convertido en vanguardia de educación superior tecnológica en el Estado de Nayarit, no sólo contribuyendo en la formación integral de profesionales técnicos que reclama el sector productivo de bienes y servicios en la entidad y la región; sino también fomentando la vinculación permanente escuela-empresa, la investigación científica y el desarrollo tecnológico.</p>
                    <a href="https://www.tepic.tecnm.mx/" target="_blank"><p>Para más información.</p></a>
                </div>
            </div>


            <br><br><br><br>
            <div class="contenedor-sobre-nosotros">
                <img src="img/uag.png" alt="" class="imagen-about-us-2">
                <div class="contenido-textos">
                    <h3><span>4</span>Universidad Autónoma de Guadalajara</h3>
                    <p>La UAG se define como una institución superior de cultura, educación y ciencia, al servicio de la humanidad y en particular de la comunidad mexicana, inspirada en la dignidad de la persona humana, en las relaciones respetuosas entre los seres humanos y en el cumplimiento de la justicia social. Sustenta los principios de libertad de cátedra, docencia e investigación y autonomía universitaria.</p>
                    <a href="https://www.uag.mx/" target="_blank"><p>Para más información.</p></a>
                </div>
            </div>

@endsection


