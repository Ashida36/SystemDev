@extends('layouts.app_admin')

@section('content')
    <ul class="nav bg-light nav-fill">
        <li class="nav-item">
            <a class="nav-link active text-dark" href="{{route('admin.home')}}">会員管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('admin.tradeManage') }}">取引管理</a>
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
                    <th scope="col">顧客ID</th>
                    <th scope="col">合計売上金額</th>
                    <th scope="col">1月</th>
                    <th scope="col">2月</th>
                    <th scope="col">3月</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection