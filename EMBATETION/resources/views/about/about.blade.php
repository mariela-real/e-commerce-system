@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
</head>
<body>
    <!-- conten__about controla toda la pagina acerca de, y clase text controla todo el texto de informacion-->
    <div class="content__about">
        <div class="text"> 
            <h1>
                ¿QUIENES SOMOS?
            </h1>
            <div class="line"></div>
           
            <p>
                Somos EMBATE, la incubadora de empresas de base tecnológica que apoya a emprendedores en la creación y
                 desarrollo de nuevas empresas. Liderada por el Msc. Rodrigo Carlos Echeverría Herrera y respaldada
                  por el Instituto de Investigación de la Facultad de Ciencias y Tecnología, EMBATE 
                  es el lugar donde las ideas se convierten en realidades empresariales.
            </p>
        </div>
     
    </div>
    <!-- content controla todo el slider de imagenes y textos de la pagina acerca de -->
    <div class="content">
        <!-- Slider tipo swiper -->
      <div class="swiper">
        <!-- clase q controla todo el slide -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <img src="{{asset('img/1.png')}}" alt="">
            <div class="text-overlay left">
                <h1>
                    EMBATE
                </h1>
                <h2>
                    Nuestra Historia
                </h2>
                <p>
                    Nuestra historia se remonta a 2009, cuando Eduardo Zambrana y 
                    Julio Medina colaboraron con el viceministerio de Ciencias y 
                    Tecnología y el Instituto Politécnico Nacional de México para crear una 
                    plataforma de apoyo a emprendimientos. Inicialmente, comenzamos como una 
                    iniciativa modesta que se desarrolló a lo largo de los años. Hubo dos fases de 
                    desarrollo: una de 2009 a 2013 y otra desde 2019 hasta la actualidad
                </p>               
            </div>
          </div>
          <div class="swiper-slide">
            <img src="{{asset('img/2.png')}}" alt="">
            <div class="text-overlay right">
                <h1>
                    EMBATE
                </h1>
                <h2>
                    Nuestra Actualidad
                </h2>
                <p>
                    En la actualidad, EMBATE está en pleno crecimiento y desarrollo. 
                    Hemos sido parte de la Universidad Mayor de San Simón (UMSS) a través del 
                    Instituto de Investigación de la Facultad de Ciencias y Tecnología (IICyT) 
                    desde 1992. Nuestros objetivos incluyen integrar la investigación en la formación profesional, generar espacios de formación en investigación y contribuir al desarrollo de la región y el país a través de la innovación y la tecnología.
                </p>      
            </div>
          </div>
           
          <div class="swiper-slide">
            <img src="{{asset('img/3.png')}}" alt="">
            <div class="text-overlay left">
                <h1>
                    EMBATE
                </h1>
                <h2>
                    Nuestros Proyectos Destacados
                </h2>
                <p>
                    En nuestro camino de crecimiento, hemos trabajado en una 
                    variedad de proyectos innovadores, desde fungicidas y repelentes naturales 
                    hasta cigarrillos a base de lavanda. También estamos comprometidos con el 
                    proyecto Ozono Pro, que mejora los cultivos a través de la aplicación de ozono 
                    en el agua y el suelo. Estos proyectos son ejemplos del espíritu emprendedor y la 
                    innovación que caracterizan a EMBATE.
                </p>      
            </div>
          </div>
          
       </div>
        <!-- clase slide paginacion -->
        <div class="swiper-pagination"></div>
      
        <!-- botones previo y siguiente del slide
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->
      
        <!-- scrollbar del slide 
        <div class="swiper-scrollbar"></div> -->
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="{{asset('js/about.js')}}"></script>
</body>

</html>
@endsection