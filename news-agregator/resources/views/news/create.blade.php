@extends('main')

@section('title', 'Home')

@section('content')
    @parent

    <form action="{{ route('category.news.store', $categoryId) }}" method="post">
        @csrf
        <p>Заголовок: <input type="text" name="title"></p>
        <p>Текст новости: <textarea name="body"></textarea></p>
        <p>Ссылка на иллюстрациюе: <input type="text" name="img_url"></p>
        
        <p>Категория: 
            <select name="category_id">ННе выбрано
                @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                @endforeach
            </select>
        </p>

        <p>Ссылка на источник: <input type="text" name="source"></p>
        <p><input type="submit" value="Создать"></p>
    </form>
    
@endsection

@section('footerScripts')
    @parent
@endsection