<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MarketPlace L8</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 40px">
  <div class="container-fluid">

    <a class="navbar-brand" href="{{route('home')}}">MarketPlace L8</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @auth


        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @if(request()->is('admin/stores')) active @endif" aria-current="page" href="{{route('admin.stores.index')}}">Lojas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->is('admin/products')) active @endif" href="{{route('admin.products.index')}}">Produtos</a>
        </li>
</ul>
 <div class="my-2 my-lg-0">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a  onclick="document.querySelector('form.logout').submit();" class="nav-link" style="cursor: pointer">Sair</a>
            <form action="{{route('logout')}}" class="logout" method="post" style="display: none;">
            @csrf
            </form>
        </li>
        <li class="nav-item">
            <span class="nav-link">{{auth()->user()->name}}</span>
        </li>
    </ul>
 </div>
@endauth
    </div>
  </div>
</nav>

    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
</body>
</html>
