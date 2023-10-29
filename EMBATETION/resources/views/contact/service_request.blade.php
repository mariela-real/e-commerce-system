
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
        <form action="service" method="POST">
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
            <select type ="text" name = "subject" value="{{ old('subject') }}"class="browser-default" id="serviceSelect">
               <option value="" disabled selected>Principal servicio que necesitas*</option>
               <option value="Solicitud de asesoramiento">Solicitud de asesoramiento</option>
               <option value="Práctica pre profesional">Práctica pre profesional</option>
               <option value="Pasantía">Pasantía</option>
            </select>
            @if ($errors->has('subject'))
                  <span class="text-danger">{{ $errors->first('subject') }}</span>
            @endif
   
            <textarea name="message" id="area" for="message" placeholder="¿Como podemos ayudar?" maxlength="300"value="{{ old('message') }}"></textarea>
            @if ($errors->has('message'))
                  <span class="text-danger">{{ $errors->first('message') }}</span>
            @endif
            <div class="col-5">
               <label for="date">Fecha: </label>
            </div> 
            <br>
            <div class="col-5">
               <input type="date" name="date" id="date" class="date" value="{{ old('date') }}">
               @if ($errors->has('date'))
                     <span class="text-danger">{{ $errors->first('date') }}</span>
               @endif
               <br>
            </div>
            <br>
                <div class="row">
                    <div class="col-5">
                        <label>Horario:</label>
                    </div>
                    <div class="col-5">
                     <select name="time" id="time" value="{{ old('time') }}"class="form-select">
                        <option value="8:30">8:30</option>
                        <option value="8:50">8:50</option>
                        <option value="9:10">9:10</option>
                        <option value="9:30">9:30</option>
                        <option value="9:50">9:50</option>
                        <option value="10:10">10:10</option>
                     </select>
                     @if ($errors->has('time'))
                          <span class="text-danger">{{ $errors->first('time') }}</span>
                     @endif
                     </div>
                </div>
                <br>
            <div class="g-recaptcha" data-sitekey="6Lcz_sMoAAAAAKlWj_K7PTb4AHeFUwI7fxJvFdZG"></div>
            @error('g-recaptcha-response')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            <input type="submit" value="Enviar datos"/>
         </form>
     </div>
     <script type="text/javascript" src="{{asset('js/form.js')}}"></script>
 
   </body>
</html>
