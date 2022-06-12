@extends('main')

@section('title', 'Home')

@section('content')
    @parent

    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('category.news.store', $categoryId) }}" method="post">
        @csrf
        <p>Заголовок: <input type="text" name="title" value="{{ old('title') }}"></p>
        <p>Текст новости: <textarea name="body">{{ old('body') }}</textarea></p>
        <p>Ссылка на иллюстрациюе: <input type="text" name="img_url" value="{{ old('img_url') }}"></p>
        
        <p>Категория: 
            <select name="category_id" value="{{ old('category_id') }}">Не выбрано 
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