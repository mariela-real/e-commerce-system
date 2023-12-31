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
    <!-- content__team controla el texto de equipo y el boton contactar y el logo -->
    <div class="content__team">

        <div class="text">
            <div class="line"></div>
            <h1>
                Conoce al equipo de EMBATE
            </h1>
            <div>
                <button type="submit" class="button__start">
                <a href="/service" class="button__start">Contáctenos</a>
                </button> 
                

            </div> 
        </div>
        <!-- team__logo controla el logo de la pagina team -->
        <div class="team__logo">
            <img src="{{asset('img/equipoEmbate.png')}}" alt="">
        </div>

        
        
    </div>
    <!-- team_grid controla toda la parte del grid de empleados -->
    <div class="team_grid">
        <!-- grid-container es la clase asociada a grid la cual permite controlar el numero de columnas y todo lo relacionado -->
        <div class="grid-container">
            <!-- grid__item controla cada una de las tarjetar de empleado ya sea su foto, nombre, descripcion  y el boton de linkedin-->
            <div class="grid__item">
                <img src="{{asset('img/perfil2.png')}}" alt="">
                <h3> Rodrigo Echeverria Herrea</h3>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>
                <button type="submit" class="button__link">Ver Linkedin</a> 
            </div>  
            <div class="grid__item">
                <img src="{{asset('img/perfil2.png')}}" alt="">
                <h3> Virgina Janco Mamani</h3>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>
                <button type="submit" class="button__link">Ver Linkedin</a> 
            </div>  
            <div class="grid__item">
                <img src="{{asset('img/perfil2.png')}}" alt="">
                <h3>Elizabeth Ximena Gutierrez</h3>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>
                <button type="submit" class="button__link">Ver Linkedin</a> 
            </div>
            
          </div>
      </div>
</body>

</html>
@endsection