@extends('layouts.app')
@section('title', '新規本登録')
@section('content')
<form action="{{ url('books')}}" method="post">
@csrf
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="card">
                    <div class="card-header alert-danger">
                        新規登録
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label class="form-group col-8 text-right">
                                タイトル:
                                <input type="text" class="form-group col-8">
                            </label>
                        </div>
                        <div class="row">
                            <label class="form-group col-8 text-right">
                                著者:
                                <input type="text" class="form-group col-8">
                            </label>
                        </div>
                        <div class="row">
                            <label class="form-group col-8 text-right">
                                出版社:
                                <input type="text" class="form-group col-8">
                            </label>
                        </div>
                        <div class="row">
                            <label class="form-group col-8 text-right">
                                画像:
                                <input type="text" class="form-group col-8">
                            </label>
                        </div>
                        <div class="row">
                            <label class="form-group col-8 text-right">
                                出版年:
                                <input type="text" class="form-group col-8">
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-9"></div>
                            <div class="form-group col-8 text-right">
                                <button class="btn btn-primary">登録</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection