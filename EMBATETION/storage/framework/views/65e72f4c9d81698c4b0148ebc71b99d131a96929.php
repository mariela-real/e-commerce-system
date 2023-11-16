
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="<?php echo e(asset('css/form.css')); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
       
   </head>
   <body>
    <div class="container">
        <div class="text"></div>
        <form action="service" method="POST">
            <div class="form_title">
               <h2>
                  SOLICITAR UNA REUNIÓN
               </h2>
            </div>
        <?php echo csrf_field(); ?>
            <input type="text" name="firstName" id="firstName" placeholder="Nombre*" class="form-control" value="<?php echo e(old('firstName')); ?>"/>
            <?php if($errors->has('firstName')): ?>
                 <span class="text-danger"><?php echo e($errors->first('firstName')); ?></span>
            <?php endif; ?>
            <input type="text" name="lastName" id="lastName" placeholder="Apellido*" class="form-control" value="<?php echo e(old('lastName')); ?>"/>
            <?php if($errors->has('lastName')): ?>
                 <span class="text-danger"><?php echo e($errors->first('lastName')); ?></span>
            <?php endif; ?>
            <input type="email" name="email" id="email" placeholder="Correo electrónico*" class="form-control" value="<?php echo e(old('email')); ?>"/>
            <?php if($errors->has('email')): ?>
                 <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>
            <select type ="text" name = "subject" value="<?php echo e(old('subject')); ?>"class="browser-default" id="serviceSelect">
               <option value="" disabled selected>Principal servicio que necesitas*</option>
               <option value="Solicitud de asesoramiento">Solicitud de asesoramiento</option>
               <option value="Práctica pre profesional">Práctica pre profesional</option>
               <option value="Pasantía">Pasantía</option>
            </select>
            <?php if($errors->has('subject')): ?>
                  <span class="text-danger"><?php echo e($errors->first('subject')); ?></span>
            <?php endif; ?>
   
            <textarea name="message" id="area" for="message" placeholder="¿Como podemos ayudar?" maxlength="300"value="<?php echo e(old('message')); ?>"></textarea>
            <?php if($errors->has('message')): ?>
                  <span class="text-danger"><?php echo e($errors->first('message')); ?></span>
            <?php endif; ?>
            
            <div class="horaFecha">
           
            
            <div class="row">
               <div class="col-5">
                  <label for="date">Fecha: </label>
               </div> 
               <input type="date" name="date" id="date" class="date" value="<?php echo e(old('date')); ?>">
               <?php if($errors->has('date')): ?>
                     <span class="text-danger"><?php echo e($errors->first('date')); ?></span>
               <?php endif; ?>
               <br>
            </div>
            <br>
            <div class="row">
                    <div class="col-5">
                        <label>Horario:</label>
                    </div>
                    <div class="col-5">
                     <select name="time" id="time" value="<?php echo e(old('time')); ?>"class="form-select">
                        <option value="8:30">8:30</option>
                        <option value="8:50">8:50</option>
                        <option value="9:10">9:10</option>
                        <option value="9:30">9:30</option>
                        <option value="9:50">9:50</option>
                        <option value="10:10">10:10</option>
                     </select>
                     <?php if($errors->has('time')): ?>
                          <span class="text-danger"><?php echo e($errors->first('time')); ?></span>
                     <?php endif; ?>
                     </div>
            </div>
         </div>
                <br>
            <div class="g-recaptcha" data-sitekey="6Lcz_sMoAAAAAKlWj_K7PTb4AHeFUwI7fxJvFdZG"></div>
            <?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <input type="submit" value="Enviar datos"/>
         </form>
     </div>
     <script type="text/javascript" src="<?php echo e(asset('js/form.js')); ?>"></script>
 
   </body>
</html>
<?php /**PATH C:\Users\poolg\OneDrive\Documentos\EMBATE\EMBATETION\resources\views/contact/service_request.blade.php ENDPATH**/ ?>