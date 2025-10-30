<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFinance - @yield('title', 'Home')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/94de8cdde8.js" crossorigin="anonymous"></script>
    @yield('styles')
</head>

<body>
    <header>
        <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('img/logo.png')}}" alt=""></a></div>
        <nav>
            <ul>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Comunidade</a></li>
                <li><a href="#">Recursos</a></li>
                <li><a href="{{ route('pricing') }}">Preços</a></li>
                <li><a href="#">Contato</a></li>
                @guest
                <li class="sign-in"><a href="{{ route('login') }}"><button>Entrar</button></a></li>
                <li class="register"><button><a href="{{ route('register') }}">Registrar</a></button></li>
                @else
                <li class="user-menu">
                    <a href="#">{{ Auth::user()->name }}</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Sair</button>
                    </form>
                </li>
                @endguest
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="social-icons">
            <div class="github"><a href="https://github.com/Vinni071"><i class="fa-brands fa-square-github"></i></a></div>
            <div class="insta"><i class="fa-brands fa-square-instagram"></i></div>
            <div class="linker"><i class="fa-solid fa-link"></i></div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>