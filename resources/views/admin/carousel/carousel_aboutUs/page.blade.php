@extends('layouts.main')
@section('content')
<head>

	<link rel="stylesheet" href="{{asset('css/page.css')}}">
</head>
<div class="page_header">
    <button onclick="mostrarContenido(1)" id="boton1" class="active">Inicio</button>
    <button onclick="mostrarContenido(2)" id="boton2">Nosotros</button>
    <button onclick="mostrarContenido(3)" id="boton3">Procesos</button>
    <button onclick="mostrarContenido(4)" id="boton4">Contactenos</button>
</div>
        
<div>
    <div id="body_content1" class="content_page active">
        <p>Contenido 1</p>
    </div>

    <div id="body_content2" class="content_page">
        <p>Contenido 2</p>
    </div>

    <div id="body_content3" class="content_page">
        <p>Contenido 3</p>
    </div>

    <div id="body_content4" class="content_page">
        <p>Contenido 4</p>
    </div>
</div>
      

    <script type="text/javascript" src="{{asset('js/page.js')}}"></script>
@endsection