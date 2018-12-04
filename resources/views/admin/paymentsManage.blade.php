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
                <th scope="col">入金ID</th>
                <th scope="col">入庫ID</th>
                <th scope="col">運営口座番号</th>
                <th scope="col">入金状況</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($pay as $pays):?>
            <tr>
                <td><?=$pays->payment_id?></td>
                <td><?=$pays->receives_id?></td>
                <td><?=$pays->manage->manage_account?></td>
                <td><button class="btn btn-block btn-sm btn-secondary" disabled>入金済</button></td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
@endsection