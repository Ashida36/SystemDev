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
    </ul>
    <?php $disable2="disabled";?>
    <?php $disable3="disabled";?>
    <div class="container">
        <h5>取引中</h5>
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th scope="col">顧客ID</th>
                <th scope="col">注文ID</th>
                <th scope="col">商品ID</th>
                <th scope="col">商品名</th>
                <th scope="col">入庫</th>
                <th scope="col">入金</th>
                <th scope="col">出庫</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($trade as $trades): ?>
                <?php if(($trades->nyuuko)==true){$disable1="disabled"; $disable2="enabled";} else $disable1="enabled";?>
                <?php if(($trades->syukko)==true){$disable2="disabled"; $disable3="enabled";}?>
                <?php if(($trades->nyuukin)==true)$disable3="disabled";?>

                <tr>
                    <td><?=$trades->member_id?></td>
                    <td><?=$trades->receive_id?></td>
                    <td><?=$trades->product->product_id?></td>
                    <td><?=$trades->product->product_name?></td>
                    <td>
                        <form method="post" action="{{route('admin.stocked')}}">
                            @csrf
                            <input type="hidden" name="stock" value="<?=$trades->receive_id?>">
                            <button type="submit" class="btn btn-block btn-sm btn-secondary" <?=$disable1?>>入庫</button>
                            <?php if($disable1=="enabled")$disable1="disabled";?>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{route('admin.sended')}}">
                            @csrf
                            <input type="hidden" name="send" value="<?=$trades->receive_id?>">
                            <button type="submit" class="btn btn-block btn-sm btn-secondary" <?=$disable2?>>出庫</button>
                            <?php if($disable2=="enabled")$disable2="disabled";?>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{route('admin.payed')}}">
                            @csrf
                            <input type="hidden" name="pay" value="<?=$trades->receive_id?>">
                            <button type="submit" class="btn btn-block btn-sm btn-secondary" <?=$disable3?>>入金</button>
                            <?php if($disable3=="enabled")$disable3="disabled";?>
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
                <th scope="col">商品ID</th>
                <th scope="col">商品名</th>
                <th scope="col">発注日</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($history as $historys): ?>
                <tr>
                    <td><?=$historys->member_id?></td>
                    <td><?=$historys->receive_id?></td>
                    <td><?=$historys->product->product_id?></td>
                    <td><?=$historys->product->product_name?></td>
                    <td><?=$historys->receive_day?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </form>
    </div>
@endsection