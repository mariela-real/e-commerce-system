
<?php $__env->startSection('Form content'); ?>

  <form method="post" <?php echo $__env->yieldContent('action'); ?>>
      <?php echo csrf_field(); ?>
      <div class="form-row">
        <div class="text">¡Unete!</div>
        
          <div class="input-data">
            <input type="text" required  <?php echo $__env->yieldContent('name1'); ?>>
            <div class="underline"></div>
            <label for="input1"><?php echo $__env->yieldContent('fieldName1'); ?></label>
          </div>

          <div class="input-data">
            <input type="text" required <?php echo $__env->yieldContent('name2'); ?>>
            <label for="input2"><?php echo $__env->yieldContent('fieldName2'); ?></label>
            <div class="underline"></div>
          </div>

          <div class="input-data" class="form-row">
            <input type="text" required <?php echo $__env->yieldContent('name3'); ?>>
            <label for="input3"><?php echo $__env->yieldContent('fieldName3'); ?></label>
            <div class="underline"></div>
          </div>
      </div>
      <div class="form-row submit-btn">
            <div class="input-data">
                <div class="inner"></div>
                <input type="submit" value="¡Me uno!">
            </div>
      </div>
  </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\poolg\OneDrive\Documentos\EMBATE\EMBATETION\resources\views/register/register.blade.php ENDPATH**/ ?>