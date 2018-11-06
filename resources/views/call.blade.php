@extends('layouts.app_admin')

@section('content')
    <ul class="nav nav-fill bg-light">
        <li class="nav-item">
            <a class="nav-link text-dark" href="/home">ホーム</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/productRegister">商品登録</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/trade">取引情報</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/call">通知</a>
        </li>
    </ul>

    <div class="container">
        <h5>郵送依頼</h5>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">商品ID</th>
                <th scope="col">取引商品</th>
                <th scope="col">金額</th>
                <th scope="col">運営住所</th>
                <th scope="col">郵送確認</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <h5>入金依頼</h5>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">商品ID</th>
                <th scope="col">取引商品</th>
                <th scope="col">金額</th>
                <th scope="col">口座番号</th>
                <th scope="col">入金確認</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection
