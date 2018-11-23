@extends('layouts.app_admin')

@section('content')
    <ul class="nav nav-fill">
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('admin.home') }}">会員管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark active" href="{{route('admin.tradeManage')}}">取引管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('admin.stockManage')}}">入庫管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('admin.sendManage')}}">出庫管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('admin.paymentsManage')}}">入金管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('admin.salesManage')}}">売上金管理</a>
        </li>
    </ul>
    <?php $disable="enabled";?>
    <div class="container">
        <h5>取引中</h5>
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th scope="col">顧客ID</th>
                <th scope="col">注文ID</th>
                <th scope="col">商品名</th>
                <th scope="col">入庫</th>
                <th scope="col">入金</th>
                <th scope="col">出庫</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($trade as $trades): ?>
                <?php if(($trades->nyuuko)==true)$disable="disabled"; else $disable="enabled";?>
                <tr>
                    <td><?=$trades->product->user_id?></td>
                    <td><?=$trades->receive_id?></td>
                    <td><?=$trades->product->product_name?></td>
                    <td>
                        <form method="post" action="{{route('admin.stocked')}}">
                            @csrf
                            <input type="hidden" name="stock" value="<?=$trades->receive_id?>">
                            <button type="submit" class="btn btn-block btn-sm btn-secondary" <?=$disable?>>入庫</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="">
                            @csrf
                            <button type="submit" name="sended" value="sended" class="btn btn-block btn-sm btn-secondary" disabled>出庫</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="">
                            @csrf
                            <button type="submit" name="payed" value="payed" class="btn btn-block btn-sm btn-secondary" disabled>入金</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h5>取引済み</h5>
        <form>
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th scope="col">顧客ID</th>
                <th scope="col">注文ID</th>
                <th scope="col">商品名</th>
                <th scope="col">発注日</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($history as $historys): ?>
                <tr>
                    <td><?=$historys->user_id?></td>
                    <td><?=$historys->receive_id?></td>
                    <td><button type="submit" name="action" value="stocked" class="btn btn-block btn-sm btn-secondary" disabled>入庫</button></td>
                    <td><button type="submit" name="action" value="sended" class="btn btn-block btn-sm btn-secondary" disabled>出庫</button></td>
                    <td><button type="submit" name="action" value="payed" class="btn btn-block btn-sm btn-secondary" disabled>入金</button></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </form>
    </div>
@endsection