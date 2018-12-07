@extends('layouts.app')

@section('content')
    <ul class="nav nav-fill bg-light">
        <li class="nav-item">
            <a class="nav-link active text-dark" href="/home">ホーム</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/productRegister">商品登録</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/trade">取引情報</a>
        </li>
    </ul>
    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">顧客ID</th>
                <th scope="col">商品ID</th>
                <th scope="col">商品名</th>
                <th scope="col">金額</th>
                <th scope="col">注文</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($product as $products): ?>
                <tr>
                    <td><?=$products->user_id?></td>
                    <td><?=$products->product_id?></td>
                    <td><?=$products->product_name?></td>
                    <td><?=$products->product_price?></td>
                    <td>
                        <form method="post" action="/parchase">
                            @csrf
                            <input type="hidden" name="product_id" value="<?=$products->product_id?>">
                            <button type="submit" class="btn btn-dark btn-sm btn-block form-control">購入</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
@endsection
