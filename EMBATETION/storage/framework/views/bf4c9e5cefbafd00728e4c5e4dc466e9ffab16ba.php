<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/footer.css')); ?>">
</head>

<footer>
    <div class="content__footer">
        <div class="content__info">
            <h1>Únete a nuestra comunidad</h1>
            <p>Obtenga las ultimas noticias, recursos para nuevas empresas, descuentos y mas</p>
        </div>
      <form action="home" method="POST">
        <?php echo csrf_field(); ?>
            <div class="input__list">
                <div class="input__item">
                    <input type="text"  name="firstName" value="<?php echo e(old('firstName')); ?>" placeholder="" >
                    <label>NOMBRE</label>
                    <?php if($errors->has('firstName')): ?>
                    <span class="text-danger"><?php echo e($errors->first('firstName')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="input__item">
                    <input type="text"  name="lastName" value="<?php echo e(old('lastName')); ?>" placeholder="">
                    <label>APELLIDO</label>

                    <?php if($errors->has('lastName')): ?>
                    <span class="text-danger"><?php echo e($errors->first('lastName')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="input__item">
                    <input type="text"  name="email" value="<?php echo e(old('email')); ?>" placeholder="">
                    <label>CORREO ELECTRÓNICO</label>

                    <?php if($errors->has('email')): ?>
                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                </div>                  
                <div>
                <button type="submit" class="button__start">UNIRME</a>  
                </div> 
            </div>
       </form>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <?php if(session('register')=='ok'): ?>
    <script>
      Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Subscripción añadida',
      showConfirmButton: false,
      timer: 1500
    })
    </script>
    <?php endif; ?>
</footer>

</html><?php /**PATH C:\Users\poolg\OneDrive\Documentos\EMBATE\EMBATETION\resources\views/subscriber/subscriber_registration.blade.php ENDPATH**/ ?>