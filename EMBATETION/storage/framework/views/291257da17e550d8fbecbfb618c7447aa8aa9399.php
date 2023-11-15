

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/work.css')); ?>">
</head>
<body>
    <!-- content__work controla toda la pagina de como trabajamos-->
    <div class="content__work">
        <!-- work_title controla un div diseñado para el titulo y line diseñado para la linea-->
        <div class="work_title">
            <h1>
                ¿CÓMO TRABAJAMOS?
            </h1>
            <div class="line"></div>
        </div>
        <!-- work_body controla la parte la primera parte de la fila de contenido en la cual esta la descripcion y el boton de contacto-->
        <div class="work_body">
              <div class="body_description">
                <p>
                    Bienvenidos a EMBATE, la incubadora de
                    empresas   de base  tecnológica que se
                    encuentra  bajo  la  visión  experta  del
                    Msc. Rodrigo Carlos Echeverría Herrera,
                    parte integral del prestigioso Instituto de
                    Investigación de la Facultad de Ciencias
                    y Tecnología. <br>
                    En EMBATE,  nos  apasiona  impulsar  a
                    emprendedores como tú en la creación
                    y desarrollo de nuevas empresas. <br>
                    ¿Cómo lo hacemos? <br>
                    Nuestra metodología es nuestra brújula
                    en este emocionante viaje hacia el éxito.
                </p>
                <button type="submit" class="button__link">Contáctenos</button>
              
              </div>
                <!-- body_image controla la parte la segunda parte de la fila de contenido en la cual esta la imagen de logo-->

              <div class="body_image">
                <img src="<?php echo e(asset('img/work.png')); ?>" alt="">
              </div>
                <!-- body_items controla la parte la tercera parte de la fila de contenido en la cual estan 3 item de detalles, 
                en conjunto con el body_item se controla el titulo y contenido ademas q en el titulo esta la funcion onclick-->
              <div class="body_items">
                <div class="columna">
                    <div class="body_item">
                        <h3 class="titulo" onclick="toggleTexto(this)">Selección rigurosa</h3>
                        <div class="contenido">Nuestro primer paso es la selección y evaluación meticulosa.
                        Cada proyecto y emprendedor que se acerca a nosotros es
                        sometido a un análisis profundo. Nuestros evaluadores y
                        mentores de renombre examinan cada propuesta en busca
                        de su viabilidad y potencial. Si eres seleccionado, comienza
                        una emocionante colaboración con EMBATE.</div>
                    </div>
                    <div class="body_item">
                        <h3 class="titulo" onclick="toggleTexto(this)">Capacitación personalizada</h3>
                        <div class="contenido">Una vez dentro de EMBATE, te ofrecemos mucho más que un
                            simple espacio de trabajo.
                            Aquí encontrarás capacitación y asesoramiento
                            personalizado en áreas críticas para tu negocio, desde finanzas
                            y marketing hasta operaciones y estrategia. No solo te damos
                            las herramientas, sino que te enseñamos a usarlas.</div>
                    </div>
                    <div class="body_item">
                        <h3 class="titulo" onclick="toggleTexto(this)">Seguimiento continuo</h3>

                        <div class="contenido">Reconocemos que el camino emprendedor está lleno de desafíos. 
                            Por lo tanto, en EMBATE, te ofrecemos un seguimiento constante. Realizamos reuniones periódicas con 
                            nuestros mentores para evaluar el progreso de tu proyecto y realizar ajustes si es necesario. 
                            Además, mantenemos un registro detallado de la gestión y finanzas de cada proyecto para garantizar la 
                            transparencia y responsabilidad.</div>

                    </div>
                  </div>
              </div>
        </div>

    </div>
        
    <script type="text/javascript" src="<?php echo e(asset('js/work.js')); ?>"></script>
</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\poolg\OneDrive\Documentos\EMBATE\EMBATETION\resources\views/work/work.blade.php ENDPATH**/ ?>