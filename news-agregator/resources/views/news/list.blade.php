@extends('main')

@section('title', 'Home')

@section('content')
    @parent

    <div class="news-list">

        @foreach ($newsList as $news)
            @if ($news['category'] == $category || $category == 'all')
                <a href="/category/{{ $category }}/news/{{ $news['id'] }}" class="categories__link">{{ $news['heading'] }}</a><br>
            @endif
        @endforeach

    </div>
    
@endsection

@section('footerScripts')
    @parent
@endsection