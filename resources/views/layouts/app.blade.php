<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SorteioGram') }}</title>

        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <link href="{{ secure_asset('icons/icofont.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/sorteio.css') }}" rel="stylesheet">
    </head>
    <body class="d-flex flex-column min-vh-100" style="background-color: #c6d9f0">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background:#fd7c59;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"> <img style="width: 120px" src="{{ secure_asset('/images/sorteiogram.logo.png') }}"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="icofont-navigation-menu icofont-2x" style="color: white"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="/"><i class="icofont-instagram"></i> Realizar Sorteio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/fale"><i class="icofont-envelope"></i> Fale Conosco</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="https://chrome.google.com/webstore/detail/sorteiogram/gjpkngahkcdfjnelojifgmdjfocdllne"><i class="icofont-puzzle"></i> Instalar extensão</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <br>
        <footer class="mt-auto text-white" style="background: #232323;">
            <div class="container-fluid py-4">
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-4 mb-3">
                        <h6 class="text-secondary">Sites parceiros</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://growsocial.com.br/?ref=link_sorteiogram.com" class="links">Ganhe mais seguidores no Instagram</a></li>
                            <li class="mb-2"><a href="https://linkna.bio/?ref=link_sorteiogram.com" class="links">Crie seu Link na Bio</a></li>
                            <li class="mb-2"><a href="https://sorteiotok.com/?ref=link_sorteiogram.com" class="links">Sorteio no Tiktok</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-3 mb-3">
                        <h6 class="text-secondary">Mapa do Site</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://chrome.google.com/webstore/detail/sorteiogram/gjpkngahkcdfjnelojifgmdjfocdllne" class="links">Instalar extensão do Google Chrome</a></li>
                            <li class="mb-2"><a href="https://sorteiogram.com/blog/" class="links">Blog</a></li>
                            <li class="mb-2"><a href="mailto:contato@sorteiogram.com?subject=Contato SorteioGram" class="links">Fale conosco</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=yZtFjSrHgVU" class="links">Video de Como realizar Sorteios no Instagram</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center text-secondary"> Todos os direitos reservados. SorteioGram 2021</div>
            </div>
        </footer>
    </body>
</html>
{{-- <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div> --}}