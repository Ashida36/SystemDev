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
        <div class="container">
             <div class="row">
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
                            <td>ID</td>
                            <td>商品名</td>
                            <td>金額</td>
                        </tr>
                     </tbody>
                 </table>
             </div>
        </div>
    </body>
</html>