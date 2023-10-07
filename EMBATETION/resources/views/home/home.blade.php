@extends('navbar.navbar')
@section('content')
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
<div class="content">
	<!-- Slider tipo swiper -->
<div class="swiper">
    <!-- clase q controla todo el slide -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img src="{{asset('img/1.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('img/2.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('img/3.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('img/4.png')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('img/5.png')}}" alt="">/div>
    </div>
    <!-- clase slide paginacion -->
    <div class="swiper-pagination"></div>
  
    <!-- botones previo y siguiente del slide -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
    <!-- scrollbar del slide 
    <div class="swiper-scrollbar"></div>-->
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="{{asset('js/home.js')}}"></script>
</body>
</html>
@endsection

