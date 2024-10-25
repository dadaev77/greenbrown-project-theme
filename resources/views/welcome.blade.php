<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/themes/classic/styles.css') }}" rel="stylesheet">
    <title>Document</title>
    <h1>Welcome to my website</h1>

</head>
<body>

<nav>
    <a href="{{ route('home') }}">Главная</a>
    <a href="{{ route('contacts') }}">Контакты</a>
</nav>

<main>
    @yield('content')
</main>

</body>
</html>