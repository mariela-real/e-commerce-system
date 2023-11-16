<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="<?php echo e(asset('css/message_box.css')); ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-light bg-light navbar__messages">
      <div class="container-fluid">
      <a class="navbar-brand" href="#"><span id="Nlogo">EMBATE</span><img src="<?php echo e(asset('img/OSOS_EMBATE.png')); ?>"
    width="50" id="logo"></a>
        <h3>Bandeja de solicitudes </h3>
        <form class="d-flex">
            <a href="admin-response">
              <span class="material-symbols-outlined" id="campana">
                notifications
              </span>
          </a>
        </form>
      </div>
    </nav>
  </header>
    <div id="Container" class="container-fluid">
            <div id="tipos">
            <span class="tipo_m" id="received">Recibidos</span>
            <span class="tipo_m" id="sent">Enviados</span>

           </div>
        <div id="tabla">
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Asunto</th>
                    <th>Fecha de llegada</th>

                </thead>
                <tbody>
                <?php $__currentLoopData = $show_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show_message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="efecto <?php echo e($show_message->state); ?>" data-url="<?php echo e(route('message',['id'=>$show_message->id])); ?>">
                  <td><?php echo e($show_message->firstName . ' ' . $show_message->lastName); ?></td>
                  <td><?php echo e($show_message->subject); ?></td>
                  <td><?php echo e($show_message->created_at); ?></td>
              </tr> 
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <?php echo $__env->yieldContent('js'); ?>
  <script>
    $(function () {$('table.table tr').click(function () 
      {  
      if( $(this).data('url')!=null)
      {
        window.location.href = $(this).data('url');
      }
       });
    }) 
  </script>
<script>
  var menu=document.getElementsByClassName("nav-link");
  var btn_menu=document.getElementById("menu")
  btn_menu.onclick=function()
  {
    if(btn_menu.innerHTML=="menu")
    {
      for(var i=0 ; i<menu.length;i++)
      {
       menu[i].style.display="block"
      }
       btn_menu.innerHTML="close";
    }
    else
    {
      for(var i=0 ; i<menu.length;i++)
      {
        menu[i].style.display="none"
      }
      btn_menu.innerHTML="menu";
    }
  }
</script>
<script>
 var received=document.getElementById("received")
 var sent=document.getElementById("sent")
 received.style.background="grey" 
</script>
</body>

</html><?php /**PATH C:\Users\poolg\OneDrive\Documentos\EMBATE\EMBATETION\resources\views/inbox/request_tray.blade.php ENDPATH**/ ?>