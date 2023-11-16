<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="<?php echo e(asset('css/form.css')); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
    <div class="container">
        <div class="text"></div>
        <form form action="advice" method="POST">
        <?php echo csrf_field(); ?>
            <input type="text" name="fistName" id="firstName" placeholder="Nombre*" value="<?php echo e(old('firstName')); ?>"/>
            <?php if($errors->has('firstName')): ?>
                 <span class="text-danger"><?php echo e($errors->first('firstName')); ?></span>
            <?php endif; ?>
            <input type="text" name="lastName" id="lastName" placeholder="Apellido*" value="<?php echo e(old('lasttName')); ?>"/>
            <?php if($errors->has('lastName')): ?>
                 <span class="text-danger"><?php echo e($errors->first('lastName')); ?></span>
            <?php endif; ?>
            <input type="email" name="email" id="email" placeholder="Correo electrónico*"value="<?php echo e(old('email')); ?>"/>
            <?php if($errors->has('email')): ?>
                 <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>
            <input type ="text" name="cell_phone_number" id="cell_phone_number" placeholder="Télefono móvil*"value="<?php echo e(old('cell_phone_number')); ?>"/>
            <?php if($errors->has('cell_phone_number')): ?>
                  <span class="text-danger"><?php echo e($errors->first('cell_phone_number')); ?></span>
            <?php endif; ?>
            <textarea name="message" for="message" placeholder="¿Como podemos ayudar?" maxlength="300"value="<?php echo e(old('message')); ?>"></textarea>
            <?php if($errors->has('message')): ?>
                  <span class="text-danger"><?php echo e($errors->first('message')); ?></span>
            <?php endif; ?>
            <input type="submit" name="enviar" value="Enviar datos"/>
         </form>
     </div>
   </body>
</html><?php /**PATH C:\Users\poolg\OneDrive\Documentos\EMBATE\EMBATETION\resources\views/advice/schedule_advice.blade.php ENDPATH**/ ?>