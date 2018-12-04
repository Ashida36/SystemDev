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
    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">出庫ID</th>
                    <th scope="col">入庫ID</th>
                    <th scope="col">出庫日</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($send as $sends):?>
                <tr>
                    <td><?=$sends->send_id?></td>
                    <td><?=$sends->stock->stock_id?></td>
                    <td><?=$sends->send_day?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
@endsection