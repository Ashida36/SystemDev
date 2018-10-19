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
    <!-- Bootstrap-datepicker読み込み -->
    <link href="/js/dist/css/bootstrap-datepicker.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/js/dist/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="/js/dist/locales/bootstrap-datepicker.ja.min.js"></script>
</head>
<body class="bg-dark">
<div class="container">
    <div class="row">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">新規登録</div>
        <div class="card-body">
            <form method="post" action="/register1">
                <?= csrf_field() ?>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-label-group">
                                <input type="text" name="UserID" class="form-control" placeholder="ユーザーID" required="required" autofocus="autofocus">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" name="inputPassword" class="form-control" placeholder="Password" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="名前" required="required" name="name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="住所" required="required" name="address">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="生年月日" required="required" id="YearMonthDay" name="birth">
                            <script type="text/javascript">
                                $('#YearMonthDay').datepicker({
                                    autoclose: true,
                                    format: 'yyyy-mm-dd',
                                    language: 'ja',       // カレンダー日本語化のため
                                    minViewMode : 0
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit" value="register">登録</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="login">ログイン</a>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
</html>