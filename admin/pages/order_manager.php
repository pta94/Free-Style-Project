@extends('layouts.admin') @section('title','Quản lý đơn đặt hàng') @section('content')
<div class="my-3 my-md-5">
    <div class="container">
        {{-- Title --}}
        <div class="page-header">
            <h1 class="page-title">
                Quản lý đơn đặt hàng
            </h1>
        </div>
        <div class="row row-cards row-deck">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Mã đơn hàng</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Tên công ty</th>
                        <th scope="col">VAT</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Thành phố</th>
                        <th scope="col">Zip code</th>
                        <th scope="col">Tên quốc gia</th>
                        <th scope="col">Mã khách hàng</th>
                        <th scope="col">Email</th>
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