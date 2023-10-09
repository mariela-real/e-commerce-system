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
         <div class="container__menu">
            <div class="menu">
              <input type="checkbox" id="check__menu">
              <label  for="check__menu" id="label__check">
                <i class="fa-solid fa-bars icon__menu"></i>
              </label>
              <nav>
                <ul>
                  <li><a href="#" id="selected"></a></li>
                  <li><a href="/">Inicio</a>
                  <li><a href="#">Acerca de nosotros</a>
                    <ul>
                      <li><a href="/about">Quienes somos</a></li>
                      <li><a href="">Nuestro equipo</a></li>
                      <li><a href="">Como trabajamos</a></li>
                      <li><a href="">Mision, Vision y valores</a></li>
                      <li><a href="">Premios y reconocimientos</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Procesos</a>
                    <ul>
                      <li><a href="">Motivación emprendedora</a></li>
                      <li><a href="">Pre incubación</a></li>
                      <li><a href="">Incubación</a></li>
                      <li><a href="">Post incubación</a></li>
                      <li><a href="">Premios y reconocimientos</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Tienda</a></li>
                  <li><a href="#">Aprender</a></li>
                  <li><a href="#">Blog</a></li>
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

  <div class="container">
    @csrf
    @yield('Form content')
  </div>


     
</body>
</html>