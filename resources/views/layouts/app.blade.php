<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

            <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg text-white bg-orange">
            <a class="h3 navbar-brand text-white" href="{{route('home')}}"><i class="fas fa-beer"></i> | AulaBeer</a>
                <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-hammer    "></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="h4 nav-item">
                      <a class="nav-link text-white" href="{{route('beers.show')}}">Cervezas</a>
                    </li>
                    <li class="h4 nav-item">
                      <a class="nav-link text-white" href="#">Precios</a>
                    </li>
                    <li class="h4 nav-item">
                      <a class="nav-link disabled text-white" href="#" tabindex="-1" aria-disabled="true">Contacto</a>
                    </li>
                  </ul>
                </div>
              </nav>

        </header>
        <main class="pt-5">
            @yield('content')

        </main>
    </body>
</html>
