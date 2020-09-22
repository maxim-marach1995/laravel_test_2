<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>

<ul>
    <li><a href="{{ route('products.index') }}">Список</a></li>
    <li><a href="{{ route('products.create') }}">Создание</a></li>
</ul>

<div class="container">
    @yield('content')
</div>
</body>
</html>
