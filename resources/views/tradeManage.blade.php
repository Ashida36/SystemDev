@extends('layouts.app_admin')

@section('content')
    <ul class="nav nav-tabs nav-fill" id="tab">
        <li class="nav-item">
            <a class="nav-link text-dark" href="admin">会員管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark active">取引管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/stockManage">入庫管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/sendManage">出庫管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/paymentsManage">入金管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="/salesManage">売上金管理</a>
        </li>
    </ul>
    <div class="container">
        <h5>取引中</h5>
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th scope="col">顧客ID</th>
                <th scope="col">商品名</th>
                <th scope="col">入庫</th>
                <th scope="col">入金</th>
                <th scope="col">出庫</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <h5>取引済み</h5>
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th scope="col">顧客ID</th>
                <th scope="col">商品名</th>
                <th scope="col">入庫</th>
                <th scope="col">入金</th>
                <th scope="col">出庫</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
@endsection