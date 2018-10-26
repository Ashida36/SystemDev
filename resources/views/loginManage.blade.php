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
<body class="bg-dark">
<div class="container">
    <div class="row">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">ログイン</div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me">
                                ログインを記憶
                            </label>
                        </div>
                    </div>
                    <a class="btn btn-primary btn-block" href="Manager">ログイン</a>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="register">新規登録</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
