@extends('layouts.admin') @section('title','Quản lý sản phẩm') @section('content')
<div class="my-3 my-md-5">
    <div class="container">
        {{-- Title --}}
        <div class="page-header">
            <h1 class="page-title">
                Quản lý sản phẩm
            </h1>
        </div>
        <div class="row row-cards row-deck">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">SKU</th>
                        <th scope="col">Hình</th>
                        <th scope="col">Thương hiệu</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Tình trạng</th>
                        <th scope="col">Số lượng tồn theo màu</th>
                        <th scope="col">Mô tả</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection