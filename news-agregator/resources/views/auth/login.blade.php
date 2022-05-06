@extends('main')

@section('title', 'Home')

@section('content')
    @parent

    <form action="/auth" method="post">
        <p>Логин: <input type="text" name="login"></p>
        <p>Пароль: <input type="password" name="password"></p>
        <p>Запомнить: <input type="checkbox" name="remember"></p>
        <p><input type="submit" value="Войти"></p>
    </form>
@endsection

@section('footerScripts')
    @parent
@endsection