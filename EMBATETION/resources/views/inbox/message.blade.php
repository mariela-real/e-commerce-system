<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="{{asset('css/message_box.css')}}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gruppo&family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><span id="Nlogo">EMBATE</span><img src="{{asset('img/OSOS_EMBATE.png')}}"
            width="50" id="logo"></a>
        <h3>Responder a solicitud</h3>
        <form class="d-flex">
          <div class="navbar-brand " style="padding-left:5%" href="/">
            <a href="/admin-response">
              <span class="material-symbols-outlined">
                arrow_back
              </span>
            </a>
          </div>
        </form>
      </div>
    </nav>
  </header>
    <div id="Container" class="container-fluid">
        <div id="tipos">
        <span class="tipo_m"><b>Nombre:</b> {{$show_messages->firstName . ' ' . $show_messages->lastName}}</span>
        <span class="tipo_m"><b>Asunto:</b> {{$show_messages->subject }}</span>
        <span class="tipo_m"> <b>Mensaje:</b> {{$show_messages->message }}</span>
        <span class="tipo_m"> <b>Fecha:</b> {{$show_messages->created_at }}</span>
        <button class="btn btn-dark" id="btn_aceptar">Aceptar</button>
        <button class="btn btn-dark" id="btn_rechazar">Rechazar</button>
        </div>
    </div>
</body>

</html>