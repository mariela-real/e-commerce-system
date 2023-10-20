@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title></title>
    <link rel="stylesheet" href="{{asset('css/mission_vision.css')}}">
</head>
<body>
    <!-- content__mission controla toda la pagina de mision y vision-->
    <div class="content__mission">
        <!-- mission_title controla un div diseñado para el titulo y line_tricolor diseñado para la linea en gradiente-->
        <div class="mission_title">
            <h1>
                VISION Y MISION
            </h1>
            <div class="line_tricolor"></div>
        </div>
        <!-- mission_vision controla la parte de la vision su texto y su imagen-->
        <div class="mission_vision">
            <!-- vision__logo controla el logo de la vision-->
            <div class="vision__logo">
                <img src="{{asset('img/lupa.png')}}" alt="">
                
            </div>
            <div class="vision_text">
                <h2> VISION</h2>
                <p>
                    Ser una unidad de referencia nacional en la
                    temática de emprendimiento e incubación,
                    buscando la vinculación de todo el sector
                    emprendedor, el estado y las unidades
                    académicas y sociales.
                </p>
            </div>      
                
        </div>
          <!-- mission_mission controla la parte de la mision su texto y su imagen-->
        <div class="mission_mission">
            <div class="mission_text">
                <h2> MISION</h2>
                <p>
                    Ser una unidad de soporte académico,
                    investigativo y de interacción para
                    emprendedores y comunidad emprendedores
                    regional, de fortalecimiento y consolidación de
                    ideas innovadoras de emprendimientos que
                    buscan ser estables y sólidos, buscando
                    contribuir al desarrollo nacional y regional.
                </p>
            </div>
              
            <!-- mission__logo controla el logo de la mision-->
            <div class="mission__logo">
                <img src="{{asset('img/idea.png')}}" alt="">
                
            </div>
        </div>
       

        
        
    </div>
    @include('footer.footer')
</body>



   
</html>
@endsection