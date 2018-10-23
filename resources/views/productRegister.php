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
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/index"><h2>OIC MARKET</h2></a>

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
                <a href="/index" class="nav-link text-dark">ホーム</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark active">商品登録</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/trade">取引情報</a>
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
                        <th scope="col">ID</th>
                        <th scope="col">商品名</th>
                        <th scope="col">金額</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($index as $products): ?>
                        <tr>
                            <td>
                                <?=$products->product_id?>
                            </td>
                            <td>
                                <?=$products->product_name?>
                            </td>
                            <td>
                                <?=$products->product_price?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
    </body>
</html>