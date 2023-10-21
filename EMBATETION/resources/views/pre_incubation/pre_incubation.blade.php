@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title></title>
    <link rel="stylesheet" href="{{asset('css/pre_incubation.css')}}">
</head>
<body>
    <!-- content__preIncubation controla toda la pagina de rpe encubacion-->
    <div class="content__preIncubation">
        <!-- preIncubation_title controla un div diseñado para el titulo, linea blanca y el texto-->
        <div class="preIncubation_title">
            <div class="line"></div>
            <h1>
                PRE ENCUBACION
            </h1>
            <p>
                El proceso ded pre incubación se basa en campamentos
                de planes de negocio, lanzar convocatorias públicas a pre incubación,
                en este proceso se realizan las primeras tutorias y apoyo a los de fueron
                preseleccionados y se realiza las primeras evaluaciones
            </p>
        </div>
        <!-- preIncubation__logo controla la parte del logo de la pagina-->
        <div class="preIncubation__logo">
                <img src="{{asset('img/preIncubacion.jpg')}}" alt="">
                
        </div>
        
       

        
        
    </div>
    @include('footer.footer')
</body>



   
</html>
@endsection