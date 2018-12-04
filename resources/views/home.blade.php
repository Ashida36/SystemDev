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
        <li class="nav-item">
            <a class="nav-link text-dark" href="/call">通知</a>
        </li>
    </ul>
    <div class="container">
        <form action="/search" method="get">
        <table class="table">
            <tbody>
            <tr>
                <th scope="row">カテゴリ</th>
                <td>
                    <div class="form-group">
                        <select class="form-control" name="category">
                                <option id="null">カテゴリ選択</option>
                                <option>レディース</option>
                                <option>メンズ</option>
                                <option>ベビーキッズ</option>
                                <option>インテリア</option>
                                <option>ゲーム</option>
                                <option>本</option>
                                <option>家電</option>
                                <option>その他</option>
                            </select>
                        </div>
                </td>
            </tr>
            <tr>
                <th scope="row">商品名</th>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" name="productName" placeholder="商品名">
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">金額</th>
                <td>
                    <div class="form-group form-inline">
                        <select class="form-control">
                               <option>0</option>
                        </select>
                    ～
                        <select class="form-control" name="money">
                            <option value="999">999</option>
                            <option value="9999">9,999</option>
                            <option value="99999">99,999</option>
                            <option value="999999">999,999</option>
                            <option value="9999999">9,999,999</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark form-control">検索</button>
                </td>
            </tr>
            </tbody>
        </table>
        </form>

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
