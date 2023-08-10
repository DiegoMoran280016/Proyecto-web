@extends('layouts.plantilla')

@section('titulo')

	Universidades

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
<div class="main-container">
  <div class="text-content">
      <h2>Título del contenido</h2><br>
      <p>
        Buscar una universidad de forma foránea puede ser una experiencia emocionante y enriquecedora. Al estudiar en una universidad en otro país, los estudiantes tienen la oportunidad de sumergirse en una nueva cultura, ampliar sus horizontes y desarrollar habilidades para la vida mientras obtienen una educación de calidad:
        <br><br><br>
        <h4>"Explora el Mundo a través de la Educación: Busca tu Universidad Foránea"</h4>
        <br><br>
        ¿Te apasiona la idea de vivir una aventura educativa única? ¿Deseas descubrir nuevas culturas mientras te preparas para un futuro brillante? ¡Entonces buscar una universidad de forma foránea es la opción perfecta para ti!</p>
        <br><br>
  </div>
  <div class="image-container">
      <img src="img/uni0.jpeg" alt="Imagen">
  </div>
</div>
      <div class="carousel-container">
        
          <div class="carousel-slides">
            <div class="slide">
              <div class="image-container">
                <img src="img/utnay.jpeg" alt="Imagen 1">
              </div>
              <div class="text-container">
                <h2>Universidad Tecnológica de Nayarit</h2>
                <p>En la Universidad Tecnológica de Nayarit estamos comprometidos en mejorar e innovar nuestro Sistema Integral de Calidad bajo la norma ISO 9001:2015, orientado a brindar servicios educativos de calidad, mediante un modelo pertinente de formación integral, incorporando funciones sustantivas de investigación, extensión universitaria, vinculación con el sector productivo y social que impacte en el entorno..</p>
                <br><a href="https://www.utnay.edu.mx/" target="_blank">Enlace a la página</a>
              </div>
            </div>
            
                
            <div class="slide">
              <div class="image-container">
                <img src="img/uan.png" alt="Imagen 2">
              </div>
              <div class="text-container">
                <h2>Universidad Autónoma de Nayarit</h2>
                <p>La Universidad Autónoma de Nayarit, es una institución pública comprometida con la formación integral de estudiantes de nivel medio superior y superior, la generación, conservación y divulgación del saber de todas las áreas del conocimiento, así como con la extensión de los servicios, la promoción de la cultura y las manifestaciones artísticas; con un alto sentido de responsabilidad social, principios y valores universitarios para el desarrollo de una sociedad sustentable, más justa, equitativa y democrática.</p>
                <br><a href="https://www.uan.edu.mx/" target="_blank">Enlace a la página</a>
              </div>
            </div>

            <div class="slide">
              <div class="image-container">
                <img src="img/tecn1.png" alt="Imagen 2">
              </div>
              <div class="text-container">
                <h2>Intituto Tecnológico de Tepic</h2>
                <p>El Instituto Tecnológico de Tepic es un centro que se ha convertido en vanguardia de educación superior tecnológica en el Estado de Nayarit, no sólo contribuyendo en la formación integral de profesionales técnicos que reclama el sector productivo de bienes y servicios en la entidad y la región; sino también fomentando la vinculación permanente escuela-empresa, la investigación científica y el desarrollo tecnológico.</p>
                <br><a href="https://www.tepic.tecnm.mx/" target="_blank">Enlace a la página</a>
              </div>
            </div>

            <div class="slide">
              <div class="image-container">
                <img src="img/uag.png" alt="Imagen 2">
              </div>
              <div class="text-container">
                <h2>Universidad Autónoma de Guadalajara</h2>
                <p>La UAG se define como una institución superior de cultura, educación y ciencia, al servicio de la humanidad y en particular de la comunidad mexicana, inspirada en la dignidad de la persona humana, en las relaciones respetuosas entre los seres humanos y en el cumplimiento de la justicia social. Sustenta los principios de libertad de cátedra, docencia e investigación y autonomía universitaria.</p>
                <br><a href="https://www.uag.mx/" target="_blank">Enlace a la página</a>
              </div>
            </div>
                  <!-- Agrega más slides aquí -->
          </div>
        </div>
            
        <div class="buttons">
          <button class="prev-button">Anterior</button>
          <button class="next-button">Siguiente</button>
        </div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
  const carouselSlides = document.querySelector('.carousel-slides');
  const slides = document.querySelectorAll('.slide');
  const prevButton = document.querySelector('.prev-button');
  const nextButton = document.querySelector('.next-button');

  let currentIndex = 0;

  function showSlide(index) {
  if (index < 0 || index >= slides.length) {
  return;
  }
                
  currentIndex = index;
  carouselSlides.style.transform = `translateX(-${currentIndex * 100}%)`;
  }
                
  prevButton.addEventListener('click', function () {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  showSlide(currentIndex);
  });
                
  nextButton.addEventListener('click', function () {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
  });

  // Mostrar el primer slide al cargar la página
  showSlide(currentIndex);
  });
</script>
@endsection


