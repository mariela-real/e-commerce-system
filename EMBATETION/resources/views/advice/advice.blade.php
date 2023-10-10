@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/advice.css')}}">
</head>
<body>
    <div class="content__advice">
        <div class="advice__start">
            <h2>
                Comienza a emprender 
            </h2>
            <h4>             
                Felicitaciones por dar el primer paso para aprender más sobre cómo unirse a nuestra 
                increíble organización. 
            </h4>
            <h4>             
                Aceptamos a estudiantes, ex estudiantes de forma continua durante todo el año. 
            </h4>
            <h4>             
                Puede postularse para iniciar un nuevo capítulo y comenzar a emprender en grande.
            </h4>
        </div>
        <div class="advice__steps">
            <h3>
                Proceso de solicitud de 3 pasos 
            </h3>
            <h4>
                Paso 1: Envíe su solicitud explicando con lujo de detalles su emprendimiento 
            </h4>
            <h4>
                Paso 2: Envíe un video breve sobre sus productos. 

            </h4>
            <h4>
                Paso 3: Hora de la entrevista: nos comunicaremos con usted para programar 
                una entrevista 
            </h4>
        </div>
        <button type="submit" class="button__send">Envie su solicitud</a> 
    </div>
</body>
</html>

@endsection