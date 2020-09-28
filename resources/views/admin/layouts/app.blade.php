<html>
<head>
    <title>App Name - @yield('title')</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('welcome') }}">Клиент</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ request()->routeIs('products.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('products.index') }}">Список <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('products.create') ? 'active' : '' }}" href="{{ route('products.create') }}">Создание <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('order') ? 'active' : '' }}" href="{{ route('order') }}">Покупки <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    @stack('scripts')
    <script src="{{ asset('bootstrap.min.js') }}" defer></script>
</body>
</html>
