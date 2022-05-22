@extends('main')

@section('title', 'feedback')

@section('content')
    @parent

    <div class="news-list">

        <form action="{{ route('feedback.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Имя:</label><br>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="comment">Комментарий:</label><br>
                <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
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