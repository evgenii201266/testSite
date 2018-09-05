<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <link href="/css/app.css?ts=<?=time()?>&quot;" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  @yield('meta')
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top margin-bottom-0">
        @if (Route::has('login'))
          <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>@else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
            @endauth
          </div>
        @endif
    </nav>
  <div class="navbar navbar-my navbar-inverse navbar-fixed-top">
    <div clas="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        @section('navbar-brand')
        <a class="navbar-brand" href="{{url('/')}}">
            PR<i class="fa fa-circle"></i>GER
            </a>
          @show
      </div>
      <div class="navbar-collapse collapse">
        @yield("navbar-left")
        <ul class="nav navbar-nav navbar-right"> 
          @if (Route::has('login')) @auth
          <li class="active">
            <a href="/">Main</a>
          </li>
          <li><a href="{{route('post.index')}}">Blog</a></li>
        <li><a href="{{route('wiki.index')}}">Wiki</a></li>
          @else
          <li class="active">
            <a href="/">Main</a>
          </li>
          <li><a href="{{ route('login') }}">Blog</a></li>
          <li><a href="{{ route('login') }}">Wiki</a></li>
          @endauth
          @endif
        </ul>
      </div>
    </div>
  </div>

  @yield('content')
  <script src='/js/app.js?ts=<?=time()?>&quot;'></script>

</body>
</html>