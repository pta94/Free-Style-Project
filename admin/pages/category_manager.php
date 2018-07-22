@extends('layouts.admin') @section('title','Quản lý loại sản phẩm') @section('content')
<div class="my-3 my-md-5">
    <div class="container">
        {{-- Title --}}
        <div class="page-header">
            <h1 class="page-title">
                Quản lý loại sản phẩm
            </h1>
        </div>
        <div class="row row-cards row-deck">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Mã loại sản phẩm</th>
                        <th scope="col">Tên loại sản phẩm</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Ngày cập nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                        <th scope="row">{{ $category->id}}</th>
                        <td>{{ $category->name}}</td>
                        <td>{{ $category->created_at}}</td>
                        <td>{{ $category->updated_at}</td>
                        </tr>
                        @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection