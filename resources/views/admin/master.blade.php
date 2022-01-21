
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
    <link rel="stylesheet" href="{{asset('dist/css/dashboard.css')}}">
</head>
<body>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Softare Assessment</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="{{url('/logout')}}">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
    <div>


  

@include('layouts.aside')


   

    
    @yield('content')


    <div class="container" style="padding-top: 20%">

    @extends('layouts.footer')

    </div>


    
  </div>
</div>


<script src="{{asset('dist/js/popper.min.js')}}"></script>
<script src="{{asset('dist/js/bootstrap.min.js"></script>
<script src="{{asset('dist/js/bootstrap.min.js"></script>

</body>
</html>



