<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/themes') }}/{{ session('theme', 'classic') }}/styles.css" rel="stylesheet">
    <title>@yield('title', 'Default Title')</title>

</head>
<body>
<nav>
    <a href="{{ route('home') }}">Главная</a>
    <a href="{{ route('contacts') }}">Контакты</a>
    <div class="animation start-home"></div>
</nav>
<main>
    @yield('content')
</main>
</body>
</html>