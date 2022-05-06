@extends('main')

@section('title', 'Home')

@section('content')
    @parent

    <div class="about">
        It is 'Hello, World' project
    </div>
    
@endsection

@section('footerScripts')
    @parent
@endsection