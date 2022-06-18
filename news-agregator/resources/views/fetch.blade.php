@extends('main')

@section('title', 'news fetch')

@section('content')
    @parent

    <div class="news-list">

        <form action="{{ route('fetch.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Имя:</label><br>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="phone">Телефон:</label><br>
                <input type="text" name="phone" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label><br>
                <input type="text" name="email" id="name">
            </div>
            <div class="form-group">
                <label for="fetch">Запрос:</label><br>
                <input type="text" name="fetch" id="name">
            </div>
            <div class="form-group">
                <input type="submit" value="Отправить">
            </div>
        </form>

    </div>
    
@endsection

@section('footerScripts')
    @parent
@endsection