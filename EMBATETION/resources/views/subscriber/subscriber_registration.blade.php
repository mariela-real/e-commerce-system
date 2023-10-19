<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
</head>

<footer>
    <div class="content__footer">
        <div class="content__info">
            <h1>Únete a nuestra comunidad</h1>
            <p>Obtenga las ultimas noticias, recursos para nuevas empresas, descuentos y mas</p>
        </div>
      <form action="home" method="POST">
        @csrf
            <div class="input__list">
                <div class="input__item">
                    <input type="text"  name="firstName" value="{{ old('firstName') }}" placeholder="" >
                    <label>NOMBRE</label>
                    @if ($errors->has('firstName'))
                    <span class="text-danger">{{ $errors->first('firstName') }}</span>
                    @endif
                </div>
                <div class="input__item">
                    <input type="text"  name="lastName" value="{{ old('lastName') }}" placeholder="">
                    <label>APELLIDO</label>

                    @if ($errors->has('lastName'))
                    <span class="text-danger">{{ $errors->first('lastName') }}</span>
                    @endif
                </div>
                <div class="input__item">
                    <input type="text"  name="email" value="{{ old('email') }}" placeholder="">
                    <label>CORREO ELECTRÓNICO</label>

                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>                  
                <div>
                <button type="submit" class="button__start">UNIRME</a>  
                </div> 
            </div>
       </form>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    @if (session('register')=='ok')
    <script>
      Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Subscripción añadida',
      showConfirmButton: false,
      timer: 1500
    })
    </script>
    @endif
</footer>

</html>