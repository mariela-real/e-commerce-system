

  <link rel="stylesheet" href="{{asset('css/message_box.css')}}" />

    <div id="Container" class="container-fluid">
        <div id="tipos">
        <span class="tipo_m"><b>Nombre:</b> {{$show_messages->firstname . ' ' . $show_messages->lastname}}</span>
        <span class="tipo_m"><b>Asunto:</b> {{$show_messages->subject }}</span>
        <span class="tipo_m"> <b>Mensaje:</b> {{$show_messages->message }}</span>
        <span class="tipo_m"> <b>Fecha:</b> {{$show_messages->created_at }}</span>
        <button class="btn btn-dark" id="btn_aceptar">Responder</button>
        </div>
    </div>



    