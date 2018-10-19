<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>web開発授業</title>
        <!-- Bootstrap4のCSS読み込み -->
        <link href="/css/css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery読み込み -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- BootstrapのJS読み込み -->
        <script src="/js/js/bootstrap.min.js"></script>
        <script src="/js/jquery.cookie.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><h2>OIC MARKET</h2></a>

            <div class="collapse navbar-collapse justify-content-around" id="navbarNav">

                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link"></a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"></a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"></a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="login">ログアウト<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <ul class="nav nav-tabs nav-fill bg-light" id="tab">
            <li class="nav-item">
                <a href="#tab1" data-toggle="tab" class="nav-link active text-dark">ホーム</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#tab2" data-toggle="tab">商品登録</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#tab3" data-toggle="tab">取引情報</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#tab4" data-toggle="tab">通知</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1">
                <div class="row justify-content-md-center">
                    <div class="container">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th scope="row">カテゴリ</th>
                                    <td>
                                        <form>
                                            <div class="form-group">
                                                <select class="form-control" id="category">
                                                    <option id="null">カテゴリ選択</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
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
                                                <button type="button" id="search" class="btn btn-dark btn-block form-control">登録</button>
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
                </div>
            </div>
            <div id="tab2" class="tab-pane fade">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">カテゴリ</th>
                                <td>
                                    <form>
                                        <div class="form-group">
                                            <select class="form-control" id="category">
                                                <option id="null">カテゴリ選択</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
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
                                            <button type="button" id="search" class="btn btn-dark btn-block form-control">登録</button>
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
                            <tr>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="tab3" class="tab-pane fade">
                <div class="row justify-content-md-center">
                    <div class="container">
                        <h3>取引中</h3>
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
                            <tr>
                                <th>1</th>
                                <td>Hanako</td>
                                <td>Qiita</td>
                                <td>@Hanaq</td>
                            </tr>
                            </tbody>
                        </table>
                        <h3>取引履歴</h3>
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
                            <tr>
                                <th>1</th>
                                <td>Hanako</td>
                                <td>Qiita</td>
                                <td>@Hanaq</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="tab4" class="tab-pane fade">
                <div class="row justify-content-md-center">
                test
                </div>
            </div>
        </div>
    </body>
</html>
