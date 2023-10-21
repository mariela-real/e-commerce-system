<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMBATE</title> 
    <script src="https://kit.fontawesome.com/13fe1b16d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}" />
    
</head>

<body>
  <header>
    <!-- containner__controla todo el navbar -->
         <div class="container__menu">
            <div class="menu">
              <!-- clase checkbox para diseñor responsivo y click mediante un icono -->
              <input type="checkbox" id="check__menu">
              <label  for="check__menu" id="label__check">
                <!-- clase para controlar estilos del icono -->
                <i class="fa-solid fa-bars icon__menu"></i>
              </label>
              <nav>
                <ul>
                  <li><a href="/" id="selected"></a></li>
                  <li><a href="/home">Inicio</a>
                  <li><a href="#">Acerca de nosotros</a>
                    <ul>
                      <li><a href="/about">Quienes somos</a></li>
                      <li><a href="/team">Nuestro equipo</a></li>
                      <li><a href="">Como trabajamos</a></li>
                      <li><a href="/mission">Mision, Vision y valores</a></li>
                      <li><a href="">Premios y reconocimientos</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Procesos</a>
                    <ul>
                      <li><a href="/motivation">Motivación emprendedora</a></li>
                      <li><a href="/pre_incubation">Pre incubación</a></li>
                      <li><a href="">Incubación</a></li>
                      <li><a href="">Post incubación</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Tienda</a></li>
                  <li><a href="/advice">Aprender</a></li>
                  <li><a href="#" class="btn btn-1">Iniciar Sesión</a></li>
                </ul>
              </nav>
            </div>
        </div>
  </header>

  <script type="text/javascript" src="{{asset('js/navbar.js')}}"></script>

    <main class="py-4">
      @yield('content')
    </main>
      
</body>
</html>