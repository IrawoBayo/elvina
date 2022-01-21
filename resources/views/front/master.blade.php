<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="description">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('favicon.ico')}}">

    <title>@yield('title','Master Page')</title>
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/album.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/owl.theme.default.min.css')}}">
</head>
<body>


<div class="container">

	@include('front.nav')



	@yield('content')

	@include('front.footer')

</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q81/X+965DrO0rT7abK41JStQrAqVzpbzo5smXKp4YfXVK+*abtTK16j1zo"></script>
<script>window.jQuery || document.write('<script src="{{asset('dist/js/jquery-slim.min.js')}}"><\/script></script>
<script src="{{asset('dist/js/popper.min.js')}}"></script>
<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/js/holder.min.js')}}"></script>
<script src="{{asset('dist/js/jquery-slim.min')}}"></script>



<script src="{{asset('dist/js1/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('dist/js1/jquery-ui.js')}}"></script>
  <script src="{{asset('dist/js1/popper.min.js')}}"></script>
  <script src="{{asset('dist/js1/bootstrap.min.js')}}"></script>
  <script src="{{asset('dist/js1/owl.carousel.min.js')}}"></script>
  <script src="{{asset('dist/js1/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('dist/js1/jquery.sticky.js')}}"></script>
  <script src="{{asset('dist/js1/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('dist/js1/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('dist/js1/aos.js')}}"></script>

  <script src="{{asset('dist/js1/main.js')}}"></script>

</body>
</html>