
<?php $__env->startSection('content'); ?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
</head>
<body>
<div class="content">
	<!-- Slider tipo swiper -->
  <div class="swiper">
    <!-- clase q controla todo el slide -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img src="<?php echo e(asset('img/taller.jpg')); ?>" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo e(asset('img/rally.jpg')); ?>" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo e(asset('img/3.png')); ?>" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo e(asset('img/4.png')); ?>" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo e(asset('img/5.png')); ?>" alt=""> </div>
   </div>
    <!-- clase slide paginacion -->
    <div class="swiper-pagination"></div>
  
    <!-- botones previo y siguiente del slide -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
    <!-- scrollbar del slide 
    <div class="swiper-scrollbar"></div> -->
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/home.js')); ?>"></script>
  <?php echo $__env->make('subscriber.subscriber_registration', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\poolg\OneDrive\Documentos\EMBATE\EMBATETION\resources\views/home/home.blade.php ENDPATH**/ ?>