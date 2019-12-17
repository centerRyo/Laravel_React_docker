@extends('layouts.app')
@section('title', 'ユーザー一覧')
@section('content')
<div class="container">
    <div class="mt-2 row">
        <table class="table table-striped">
            <thead>
                <tr class="table-info">
                    <th scope="col">ID</th>
                    <th scope="col">名前</th>
                    <th scope="col">メールアドレス</th>
                    <th scope="col">職業</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->job }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection