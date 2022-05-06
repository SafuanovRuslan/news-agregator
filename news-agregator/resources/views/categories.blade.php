@extends('main')

@section('title', 'Home')

@section('content')
    @parent

    <div class="categories">
        <a href="category/all/news" class="categories__link">all</a><br>

        @foreach ($categories as $category)
            <a href="/category/{{ $category }}/news" class="categories__link">{{ $category }}</a><br>
        @endforeach

    </div>
    
@endsection

@section('footerScripts')
    @parent
@endsection