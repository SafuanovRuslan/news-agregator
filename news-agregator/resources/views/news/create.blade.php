@extends('main')

@section('title', 'Home')

@section('content')
    @parent

    <form action="/category/{{ $category }}/news" method="post">
        <p>Заголовок: <input type="text" name="heading"></p>
        <p>Текст новости: <textarea name="body"></textarea></p>
        <p>Краткое описание: <textarea name="description"></textarea></p>
        <p><input type="submit" value="Создать"></p>
    </form>
    
@endsection

@section('footerScripts')
    @parent
@endsection