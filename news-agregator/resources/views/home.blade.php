@extends('main')

@section('title', 'Home')

@section('content')
    @parent
    <p>Это сервис будущего агрегатора новостей. Добро пожаловать, мы рады вас здесь видеть =)</p>
    <p><a href="{{route('fetch.create')}}">Создать запрос на выгрузку</a></p>
    <p><a href="{{route('feedback.create')}}">Оставить отзыв</a></p>
@endsection

@section('footerScripts')
    @parent
@endsection