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
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/Manager"><h2>OIC MARKET</h2></a>

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
                    <a class="nav-link active" href="loginManage">ログアウト<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="nav nav-tabs nav-fill" id="tab">
        <li class="nav-item">
            <a class="nav-link active text-dark">会員管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/tradeManage">取引管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/stockManage">入庫管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/sendManage">出庫管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/paymentsManage">入金管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/salesManage">売上金管理</a>
        </li>
    </ul>
    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">顧客ID</th>
                    <th scope="col">名前</th>
                    <th scope="col">ユーザー名</th>
                    <th scope="col">住所</th>
                    <th scope="col">生年月日</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($member as $members) :?>
            <tr>
                <td><?=$members->member_id?></td>
                <td><?=$members->member_name?></td>
                <td><?=$members->member_user?></td>
                <td><?=$members->member_address?></td>
                <td><?=$members->member_birth?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>