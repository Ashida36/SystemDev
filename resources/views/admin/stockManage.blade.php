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
    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">入庫ID</th>
                    <th scope="col">商品名</th>
                    <th scope="col">検品状況</th>
                    <th scope="col">入庫状況</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($stock as $stocks):?>
                <tr>
                    <td><?=$stocks->stock_id?></td>
                    <td><?=$stocks->product->product_name?></td>
                    <td><button class="btn btn-block btn-sm btn-secondary" disabled>検品済</button></td>
                    <td><button class="btn btn-block btn-sm btn-secondary" disabled>入庫済</button></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
@endsection