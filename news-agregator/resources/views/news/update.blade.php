@extends('main')

@section('title', 'Home')

@section('content')
    @parent

    <form action="{{ route('category.news.update', [$news['category_id'], $news['id']]) }}" method="post">
        @csrf
        @method('patch')
        <p>Заголовок: <input type="text" name="title" value="{{ $news['title'] }}"></p>
        <p>Текст новости: <textarea name="body">{{ $news['body'] }}</textarea></p>
        <p>Ссылка на иллюстрациюе: <input type="text" name="img_url" value="{{ $news['img_url'] }}"></p>
        
        <p>Категория: 
            <select name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                @endforeach
            </select>
        </p>

        <p>Ссылка на источник: <input type="text" name="source" value="{{ $news['source'] }}"></p>
        <p><input type="submit" value="Обновить"></p>
    </form>
    
@endsection

@section('footerScripts')
    @parent
@endsection