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

    <form action="/category" method="post">
        @csrf
        <p>Название категории: <input type="text" name="name" value="{{ old('name') }}"></p>
        <p><input type="submit" value="Создать"></p>
    </form>
    
@endsection

@section('footerScripts')
    @parent
@endsection