@extends('layouts.app')
@section('title', 'ユーザー作成')
@section('content')
<form action="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="card">
                    <div class="card-header alert-danger">
                        新規
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label class="form-group col-8 text-right">名前:
                                <input type="text" class="form-group col-8">
                            </label>
                        </div>
                        <div class="row">
                            <label class="form-group col-8 text-right">メールアドレス:
                                <input type="text" class="form-group col-8">
                            </label>
                        </div>
                        <div class="row">
                            <label class="form-group col-8 text-right">職業:
                                <input type="text" class="form-group col-8">
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-9"></div>
                            <div class="form-group col-7 text-right">
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