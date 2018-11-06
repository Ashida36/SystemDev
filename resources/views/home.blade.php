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
        <table class="table">
            <tbody>
            <tr>
                <th scope="row">カテゴリ</th>
                <td>
                    <form action="index1" method="post">
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
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">商品名</th>
                <td>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="productName" placeholder="商品名">
                        </div>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">金額</th>
                <td>
                    <form class="form-inline">
                        <div class="form-group">
                            <select class="form-control" id="money">
                                <option>0</option>
                                <option>1000</option>
                                <option>10000</option>
                                <option>100000</option>
                                <option>1000000</option>
                            </select>
                        </div>
                        ～
                        <div class="form-group">
                            <select class="form-control" id="money1">
                                <option>999</option>
                                <option>9999</option>
                                <option>99999</option>
                                <option>999999</option>
                                <option>9999999</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="button" id="search" class="btn btn-dark btn-block form-control">検索</button>
                        </div>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">商品名</th>
                <th scope="col">金額</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection
