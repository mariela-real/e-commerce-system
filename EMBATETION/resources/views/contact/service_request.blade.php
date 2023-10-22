<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="{{asset('css/form.css')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   </head>
   <body>
    <div class="container">
        <div class="text"></div>
        <form form action="service" method="POST">
        @csrf
            <input type="text" name="firstName" id="firstName" placeholder="Nombre*" value="{{ old('firstName') }}"/>
            @if ($errors->has('firstName'))
                 <span class="text-danger">{{ $errors->first('firstName') }}</span>
            @endif
            <input type="text" name="lastName" id="lastName" placeholder="Apellido*" value="{{ old('lastName') }}"/>
            @if ($errors->has('lastName'))
                 <span class="text-danger">{{ $errors->first('lastName') }}</span>
            @endif
            <input type="email" name="email" id="email" placeholder="Correo electrónico*"value="{{ old('email') }}"/>
            @if ($errors->has('email'))
                 <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <input type ="text" name="cell_phone_number" id="cell_phone_number" placeholder="Télefono móvil*"value="{{ old('cell_phone_number') }}"/>
            @if ($errors->has('cell_phone_number'))
                  <span class="text-danger">{{ $errors->first('cell_phone_number') }}</span>
            @endif
   
            <select type ="text" name = "subject" value="{{ old('subject') }}"class="browser-default">
               <option value="" disabled selected>Principal servicio que necesitas*</option>
               <option value="Solicitud de asesoramiento">Solicitud de asesoramiento</option>
               <option value="Práctica pre profesional">Práctica pre profesional</option>
               <option value="Pasantía">Pasantía</option>
            </select>
            @if ($errors->has('subject'))
                  <span class="text-danger">{{ $errors->first('subject') }}</span>
            @endif
   
            <textarea name="message" for="message" placeholder="¿Como podemos ayudar?" maxlength="300"value="{{ old('message') }}"></textarea>
            @if ($errors->has('message'))
                  <span class="text-danger">{{ $errors->first('message') }}</span>
            @endif
            <div class="g-recaptcha" data-sitekey="6LcwIsAoAAAAAFyDlkrfyPpQhQda43Tt4oyr1Mpo"></div>
            <br>
            @if ($errors->has('g-recaptcha-response'))
            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
            @endif
            <input type="submit" name="enviar" value="Enviar datos"/>

         </form>
     </div>
     <script type="text/javascript" src="{{asset('js/form.js')}}"></script>
   </body>
</html>