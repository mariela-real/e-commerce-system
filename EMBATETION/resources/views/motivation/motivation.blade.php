@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title></title>
    <link rel="stylesheet" href="{{asset('css/motivation.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <script src="https://kit.fontawesome.com/13fe1b16d3.js" crossorigin="anonymous"></script>
	
</head>
<body>
    <!-- content__motivation controla toda la pagina motivation, y clase text controla todo el texto de informacion-->
    <div class="content__motivation">
        
       
        <div class="text">
            <div class="line"></div>
            <h1>
                MOTIVACION EMPRENDEDORA
            </h1>
            <p>
                El proceso de motivación empresarial en la incubadora de empresas de
                base tecnológica embate se enfoca en proporcionar campamentos de
                motivación emprendedora, seminarios talleres y/o cursos de gestión
                emprendedora a todo emprendedor ya sea interno o externo de la
                Universidad mayor de San Simón.
            </p>
            <p>
                Los campamentos de motivación empresarial son actividades que
                pueden ser presenciales o virtuales con la participación de expositores,
                esta actividad esta dirigida a estudiantes, docentes, emprendedores y
                toda comunidad que quiera conocer gestiones emprendedoras.
            </p>
        </div>

        <!-- motivation__logo controla el logo de la pagina motivacion -->
        <div class="motivation__logo">
            <img src="{{asset('img/motivacionEmprendedora2.jpg')}}" alt="">
        </div>
        
    </div>

    <!-- motivation_grid controla toda la parte del grid de la pagina de motivacion emprendedora -->
    <div class="motivation_grid">
        <!-- grid-container es la clase asociada a grid la cual permite controlar el numero de columnas y todo lo relacionado -->
        <div class="grid-container">
            <!-- grid__item controla cada una de los items ya sea titulo , imagen , descripcion  y el boton de ver mas-->
            <div class="grid__item">
                
                <h2>Talleres y seminarios</h3>
                <img src="{{asset('img/motivationGrid.jpg')}}" alt="">
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>
                <button type="submit" class="button__link">Ver más</a> 
            </div>  
            
            <div class="grid__item">
                
                <h2>Capacitaciones</h3>
                <img src="{{asset('img/motivationGrid.jpg')}}" alt="">
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>
                <button type="submit" class="button__link">Ver más</a> 
            </div>  
            
            <div class="grid__item">
                
                <h2>Cursos</h3>
                <img src="{{asset('img/motivationGrid.jpg')}}" alt="">
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>
                <button type="submit" class="button__link">Ver más</a> 
            </div>  
            
            
            
            
            
          </div>
    </div>
    <div class="content_swiper">
        <!-- Slider tipo swiper -->
      <div class="swiper">
        <!-- clase q controla todo el slide -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <h1>
                Testimonios de nuestros emprendedores
            </h1>
          
            <i class="fa-solid fa-quote-left icon_start"></i>
            <h4>
                    Conoce algunas de nuestras experiencias
            </h4>
           
            <p>
                "Gracias a esta experiencia he aprendio, reaprendido y comprendido
                muchas cosas que uso actualmente y usare en el futuro.
                Los formadores han motivado a nuestro grupo a sacar lo mejor de cada
                uno, haciendonos absorber la Cultura Jala desde el principio, y centrandonos en el objetivo profesional sin
                perder el foco en el crecimiento personal.
                Los bootcamps de Jalasoft son la mejor manera de comenzar tu carrera en
                el mundo del desarrollo"
            </p>
           
            <h3>
                    Alejando Sanchez
            </h4>
            <i class="fa-solid fa-quote-right icon_end"></i>
           
            
          </div>

          <div class="swiper-slide">
            <h1>
                Testimonios de nuestros emprendedores 2
            </h1>
          
            <i class="fa-solid fa-quote-left icon_start"></i>
            <h4>
                    Conoce algunas de nuestras experiencias 2
            </h4>
           
            <p>
                "Gracias a esta experiencia he aprendio, reaprendido y comprendido
                muchas cosas que uso actualmente y usare en el futuro.
                Los formadores han motivado a nuestro grupo a sacar lo mejor de cada
                uno, haciendonos absorber la Cultura Jala desde el principio, y centrandonos en el objetivo profesional sin
                perder el foco en el crecimiento personal.
                Los bootcamps de Jalasoft son la mejor manera de comenzar tu carrera en
                el mundo del desarrollo"
            </p>
           
            <h3>
                    Alejando Sanchez 2
            </h4>
            <i class="fa-solid fa-quote-right icon_end"></i>
           
          </div>

          <div class="swiper-slide">
            <h1>
                Testimonios de nuestros emprendedores 3
            </h1>
          
            <i class="fa-solid fa-quote-left icon_start"></i>
            <h4>
                    Conoce algunas de nuestras experiencias 3 
            </h4>
           
            <p>
                "Gracias a esta experiencia he aprendio, reaprendido y comprendido
                muchas cosas que uso actualmente y usare en el futuro.
                Los formadores han motivado a nuestro grupo a sacar lo mejor de cada
                uno, haciendonos absorber la Cultura Jala desde el principio, y centrandonos en el objetivo profesional sin
                perder el foco en el crecimiento personal.
                Los bootcamps de Jalasoft son la mejor manera de comenzar tu carrera en
                el mundo del desarrollo"
            </p>
           
            <h3>
                    Alejando Sanchez 3
            </h4>
            <i class="fa-solid fa-quote-right icon_end"></i>
           
          </div>
      
       </div>
        <!-- clase slide paginacion 
        <div class="swiper-pagination"></div>-->
      
        <!-- botones previo y siguiente del slide -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      
        <!-- scrollbar del slide 
        <div class="swiper-scrollbar"></div> -->
      </div>
    </div>

    <div class="text_dinamic">
        <div class="items">
            <div class="item">
                <h3>Campamento de planes de negocio</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="item">
                <h3>Convocatoria a pre incubación</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="item">
                <h3>Proceso de pre selección</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="item">
                <h3>Tutorías iniciales</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="item">
                <h3>Primera evaluación</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            
        </div>
        
        
        <div class="textos">
            <div class="texto">Los campamentos de planes de
                negocio presenta los emprendedores la posibilidad de conocer
                herramientas, metodologías que enseñen a fortalecer el conocimiento
                de la elaboración de planes de negocios adecuados para su
                emprendimiento.</div>
            <div class="texto">La incubadora de empresas de base
                tecnológica EMBATE lanza las convocatorias públicas.</div>
            <div class="texto">El proceso de pre selección de los proyectos
                busca realizar la primera depuración de los proyectos, este proceso no
                limita el numero de seleccionados.</div>
            <div class="texto">Las tutorías iniciales son los primeros apoyos que se
                brinda de manera directa de la incubadora a los emprendedores
                preseleccionados. En estas tutorías se debe realizar un acta de
                recomendaciones al proyecto.</div>
            <div class="texto">La primera evaluación se la realiza de manera mas
                especifica con la participación de tribunales y unidades académicas de
                la facultad de ciencias y tecnología que podrían tener interés en
                incubar al emprendedor.<br>
                Para realizar esta evaluación se mandarán cartas a estas unidades
                indicando hora y lugar de la presentación, consistiendo en 2 tiempos:<br>
                1.- El emprendedor tendrá 15 min para realizar su exposición.<br>
                2.- El emprendedor tendrá 20 min para responder las consultas del
                tribunal .<br>
                El tribunal es responsable de la segunda depuración.<br>
                Se programará una reunión técnica especifica con las unidades
                interesadas en apoyar el proceso de incubación.
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{asset('js/motivation.js')}}"></script>
</body>



   
</html>
@endsection