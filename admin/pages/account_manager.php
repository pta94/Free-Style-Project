@extends('layouts.admin') @section('title','Quản lý tài khoản') @section('content')
<div class="my-3 my-md-5">
    <div class="container">
        {{-- Title --}}
        <div class="page-header">
            <h1 class="page-title">
                Quản lý tài khoản
            </h1>
        </div>
        <div class="row row-cards row-deck">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Mã tài khoản</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Loại tài khoản</th>
                        <th scope="col">Tình trạng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->isAdmin }}</td>
                        <td>{{ $user->isActive }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection