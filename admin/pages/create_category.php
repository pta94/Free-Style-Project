@extends('layouts.admin') 
@section('title','Menu Page') 
@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Tạo mới loại sản phẩm
            </h1>
        </div>
        <div class="row row-cards row-deck">
            <div class="col-12">
                <div class="">
                    <div class="row">
                        <fieldset class="form-fieldset col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Tên category chính</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group mb-0">
                                    <input type="button" value="Tạo" class="form-control btn-primary" />
                                </div>
                        </fieldset>

                        <fieldset class="form-fieldset col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Chọn category chính</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tên category phụ</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group mb-0">
                                    <input type="button" value="Tạo" class="form-control btn-primary" />
                                </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection