@extends('main')

@section('title', 'Home')

@section('content')
    @parent

    <form action="/category" method="post">
        @csrf
        <p>Название категории: <input type="text" name="name"></p>
        <p><input type="submit" value="Создать"></p>
    </form>
    
@endsection

@section('footerScripts')
    @parent
@endsection