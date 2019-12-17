@extends('layouts.app')
@section('title', '本一覧')
@section('content')
<div class="container">
    <div class="mt-2 row">
        <table class="table table-striped">
            <thead>
                <tr class="table-info">
                    <th scope="col">ID</th>
                    <th scope="col">タイトル</th>
                    <th scope="col">著者</th>
                    <th scope="col">出版社</th>
                    <th scope="col">画像</th>
                    <th scope="col">出版年</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->company }}</td>
                    <td>{{ $book->image_url }}</td>
                    <td>{{ $book->publication_year }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection