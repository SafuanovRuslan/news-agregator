@extends('main')

@section('title', 'Home')

@section('content')
    @parent

    <div class="categories">
        <a href="category/all/news" class="categories__link">all</a><br>

        @foreach ($categories as $category)
            <a href="/category/{{ $category['id'] }}/news" class="categories__link">{{ $category['name'] }}</a>
            <a href="{{ route('category.edit', $category['id']) }}">ред.</a><br>
        @endforeach

        <a href="category/create">Добавить категорию</a><br>

    </div>
    
@endsection

@section('footerScripts')
    @parent
@endsection