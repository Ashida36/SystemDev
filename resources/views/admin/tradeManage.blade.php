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
        <h5>取引中</h5>
        <form method="post" action="">
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th scope="col">顧客ID</th>
                <th scope="col">注文ID</th>
                <th scope="col">入庫</th>
                <th scope="col">入金</th>
                <th scope="col">出庫</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="action" value="stocked" class="btn btn-block btn-sm btn-dark">入庫</button></td>
                    <td><button type="submit" name="action" value="sended" class="btn btn-block btn-sm btn-dark">出庫</button></td>
                    <td><button type="submit" name="action" value="payed" class="btn btn-block btn-sm btn-dark">入金</button></td>
                </tr>
            </tbody>
        </table>
        </form>
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
        </form>
    </div>
@endsection