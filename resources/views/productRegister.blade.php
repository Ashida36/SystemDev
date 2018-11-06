@extends('layouts.app')

@section('content')
        <ul class="nav nav-fill bg-light">
            <li class="nav-item">
                <a href="/" class="nav-link text-dark">ホーム</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark active" href="/productRegister">商品登録</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/trade">取引情報</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/call">通知</a>
            </li>
        </ul>
        <div class="container">
                <form action="/productRegister1" method="get">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row">カテゴリ</th>
                            <td>
                                <div class="form-group">
                                    <select class="form-control" name="category1">
                                        <option>カテゴリ選択</option>
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
                                    <input type="text" class="form-control" name="productName1" placeholder="商品名">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">金額</th>
                            <td>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="productValue" placeholder="金額">
                                </div>
                                <div class="form-group">
                                    <button type="submit" value="proRegister" class="btn btn-dark btn-block form-control">登録</button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">商品ID</th>
                        <th scope="col">商品名</th>
                        <th scope="col">金額</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($product as $products): ?>
                    <tr>
                        <td><?=$products->product_id?></td>
                        <td><?=$products->product_name?></td>
                        <td><?=$products->product_price?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
@endsection