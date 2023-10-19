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
</head>
<body>
    <!-- content__motivation controla toda la pagina motivation, y clase text controla todo el texto de informacion-->
    <div class="content__motivation">
        <!-- motivation__logo controla el logo de la pagina motivacion -->
        <div class="motivation__logo">
            <img src="{{asset('img/logomodificado.jpg')}}" alt="">
        </div>

        <div class="text">
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
        
    </div>
    @include('footer.footer')
</body>



   
</html>
@endsection