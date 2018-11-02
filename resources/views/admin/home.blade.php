@extends('layouts.app_admin')

@section('content')
    <ul class="nav bg-light nav-fill">
        <li class="nav-item">
            <a class="nav-link active text-dark">会員管理</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('admin.tradeManage') }}">取引管理</a>
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
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">名前</th>
                    <th scope="col">E-Mail Address</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user) :?>
                <tr>
                    <td><?=$user->id?></td>
                    <td><?=$user->name?></td>
                    <td><?=$user->email?></td>
                </tr>
            <?php endforeach?>
            </tbody>
        </table>
    </div>
@endsection