<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="{{asset('css/form.css')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
    <div class="container">
        <div class="text"></div>
        <form form action="advice" method="POST">
        @csrf
            <input type="text" name="fistName" id="firstName" placeholder="Nombre*"/>
            @if ($errors->has('firstName'))
                 <span class="text-danger">{{ $errors->first('firstName') }}</span>
            @endif
            <input type="text" name="lastName" id="lastName" placeholder="Apellido*"/>
            @if ($errors->has('lastName'))
                 <span class="text-danger">{{ $errors->first('lastName') }}</span>
            @endif
            <input type="email" name="email" id="email" placeholder="Correo electrónico*"/>
            @if ($errors->has('email'))
                 <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <input type ="text" name="cell_phone_number" id="cell_phone_number" placeholder="Número de celular*"/>
            @if ($errors->has('cell_phone_number'))
                  <span class="text-danger">{{ $errors->first('cell_phone_number') }}</span>
            @endif
            <textarea name="message" for="message" placeholder="¿Como podemos ayudar?" maxlength="300"></textarea>
            
            <input type="submit" name="enviar" value="Enviar datos"/>
         </form>
     </div>
   </body>
</html>