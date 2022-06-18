@extends('main')

@section('title', 'Home')

@section('content')
    @parent

    <div class="news-list">

        @foreach ($newsList as $news)
                <a href="/category/{{ $news['category_id'] }}/news/{{ $news['id'] }}" class="categories__link">{{ $news['title'] }}</a><br>
        @endforeach

        <a href="{{ route('category.news.create', $categoryId) }}">Добавить новость</a><br>

    </div>
    
@endsection

@section('footerScripts')
    @parent
@endsection