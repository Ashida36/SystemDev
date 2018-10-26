@extends('layouts.app')

@section('content')
    <ul class="nav nav-fill bg-light">
        <li class="nav-item">
            <a href="/" class="nav-link text-dark">ホーム</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/productRegister">商品登録</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark active">取引情報</a>
        </li>
    </ul>
    <div class="container">
        <h5>取引中</h5>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ユーザー名</th>
                <th scope="col">取引商品</th>
                <th scope="col">金額</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <h5>取引履歴</h5>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ユーザー名</th>
                <th scope="col">取引商品</th>
                <th scope="col">金額</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection