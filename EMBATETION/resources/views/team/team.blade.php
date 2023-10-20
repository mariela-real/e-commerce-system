@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title></title>
    <link rel="stylesheet" href="{{asset('css/team.css')}}">
</head>
<body>
    <!-- content__team controla toda la pagina de equipo, y clase text controla todo el texto de informacion-->
    <div class="content__team">

        <div class="text">
            <h1>
                NUESTRO EQUIPO DE TRABAJO
            </h1>
            
        </div>
        <!-- team__logo controla el logo de la pagina team -->
        <div class="team__logo">
            <img src="{{asset('img/equipo.jpg')}}" alt="">
        </div>

        
        
    </div>
    @include('footer.footer')
</body>



   
</html>
@endsection