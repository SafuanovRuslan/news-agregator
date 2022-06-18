@extends('main')

@section('title', 'Home')

@section('content')
    @parent

    <div class="news-list">
        <h2>{{ $news['title'] }}</h2>
        <p>{{ $news['body'] }}</p>
    </div>
    <a href="{{ route('category.news.edit', [$news['category_id'], $news['id']]) }}">Редактировать новость</a>
@endsection

@section('footerScripts')
    @parent
@endsection