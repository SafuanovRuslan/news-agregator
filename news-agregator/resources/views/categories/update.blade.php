@extends('main')

@section('title', 'Home')

@section('content')
    @parent

    <form action="{{ route('category.update', $category[0]['id']) }}" method="post">
        @csrf
        @method('patch')
        <p>Название категории: <input type="text" name="name" value="{{ $category[0]['name'] }}"></p>
        <p><input type="submit" value="Сохранить"></p>
    </form>
    
@endsection

@section('footerScripts')
    @parent
@endsection