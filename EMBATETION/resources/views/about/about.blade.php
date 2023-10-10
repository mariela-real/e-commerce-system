@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title></title>
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
</head>
<body>
    <!-- conten__about controla toda la pagina acerca de, y clase text controla todo el texto de informacion-->
    <div class="content__about">
        <div class="text">
            <p>
                En la incubadora de empresas de base tecnológica EMBATE a cargo del Msc. Rodrigo
                Carlos Echeverría Herrera perteneciente al instituto de investigación de la facultad de
                ciencias y tecnología.
                EMBATE es una institución que se dedica a apoyar a emprendedores en la creación y
                desarrollo de nuevas empresas, para que se pueda llevar a cabo esta finalidad la
                incubadora cuenta con procedimientos y métodos que permiten brindar apoyo a los
                emprendedores.
                Uno de los métodos principales de la incubadora de empresas de base tecnológica
                EMBATE es el proceso de selección y evaluación de los emprendedores y proyectos. La
                incubadora cuenta con un evaluador y mentor que analizan cada propuesta de negocio y
                emprendedor para determinar su viabilidad y potencial. Los emprendedores
                seleccionados reciben capacitación y asesoramiento en diferentes áreas de negocio,
                como finanzas, marketing, operaciones y estrategia.
                La incubadora cuenta con espacios de trabajo compartidos, salas de reuniones y equipos
                tecnológicos de última generación para que los emprendedores puedan desarrollar sus
                proyectos con las herramientas adecuadas así lograr potenciar sus habilidades y
                conocimientos.
                En cuanto a los procedimientos, la incubadora tiene un proceso riguroso de seguimiento
                y evaluación del progreso de los emprendedores. Se realizan reuniones periódicas con
                los mentores para evaluar el avance de los proyectos y realizar ajustes si es necesario.
                Además, se lleva un registro detallado de la gestión y finanzas de cada proyecto para
                garantizar la transparencia y responsabilidad.
            </p>
        </div>
        <!-- about__logo controla el logo de la pargina acerca de -->
        <div class="about__logo">
            <img src="{{asset('img/logomodificado.jpg')}}" alt="">
        </div>
    </div>
    
</body>
</html>
@endsection