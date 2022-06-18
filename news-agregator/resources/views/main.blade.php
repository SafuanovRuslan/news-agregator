<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTimes | @yield('title')</title>
    <link rel="stylesheet" href="/style/main.css">
    @section('headerScripts')
    @show
</head>
<body>
    <header class="header center">
        <div class="logo">MyTimes</div>
        <ul class="header__nav-list">
            <li class="header__nav-item"><a href="/" class="header__nav-link">Главная</a></li>
            <li class="header__nav-item"><a href="/category" class="header__nav-link">Категории</a></li>
            <li class="header__nav-item"><a href="/category/all/news" class="header__nav-link">Новости</a></li>
            <li class="header__nav-item"><a href="/category/all/news/create" class="header__nav-link">Создать новость</a></li>
            <li class="header__nav-item"><a href="/about" class="header__nav-link">О нас</a></li>
            <li class="header__nav-item"><a class="header__nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Выйти') }}</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                @csrf
            </form>
        </ul>
    </header>
    <main class="content center">
        @section('content')
        @show
    </main>
    <footer class="footer center">
        Copyright | 2022
        @section('footerScripts')
        @show
    </footer>
</body>
</html>