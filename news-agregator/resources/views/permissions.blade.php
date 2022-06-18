@extends('main')

@section('title', 'permissions')

@section('content')
    @parent

    <div class="users-list">
        <table>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>isAdmin</td>
                <td>Button</td>
            </tr>

            @foreach ($users as $user)
                <tr>
                    <form action="{{ route('permissions') }}" method="post">
                        @csrf
                        <td><input type="text" name="name" value="{{ $user['name'] }}" readonly></td>
                        <td><input type="text" name="email" value="{{ $user['email'] }}" readonly></td>
                        <td><input type="text" name="isAdmin" value="{{ $user['isAdmin'] }}"></td>
                        <td><input type="submit" value="Обновить"></td>
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
    
@endsection

@section('footerScripts')
    @parent
@endsection