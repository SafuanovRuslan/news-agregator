@extends('main')

@section('title', 'Home')

@section('content')
    @parent

    <div class="news-list">

        @foreach ($newsList as $news)
            @if ($news['id'] == $id)
                <h2>{{ $news['heading'] }}</h2>
                <p>{{ $news['body'] }}</p>
            @endif
        @endforeach

    </div>
    
@endsection

@section('footerScripts')
    @parent
@endsection