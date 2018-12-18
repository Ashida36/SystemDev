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
            <a class="nav-link text-dark active" href="/trade">取引情報</a>
        </li>
    </ul>
    <div class="container">
        <h5>取引中</h5>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ユーザーID</th>
                <th scope="col">商品名</th>
                <th scope="col">金額</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($trade as $trades): ?>
                <tr>
                    <td><?=$trades->product_id?></td>
                    <td><?=$trades->user_id?></td>
                    <td><?=$trades->product_name?></td>
                    <td><?=$trades->product_price?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h5>取引履歴</h5>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">商品ID</th>
                <th scope="col">ユーザーID</th>
                <th scope="col">商品名</th>
                <th scope="col">金額</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($history as $historys): ?>
                <tr>
                    <td><?=$historys->product_id?></td>
                    <td><?=$historys->user_id?></td>
                    <td><?=$historys->product_name?></td>
                    <td><?=$historys->product_price?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="container">
            <div class="btn btn-dark float-right" onclick="window.location.reload();">更新</div>
        </div>
    </div>
@endsection