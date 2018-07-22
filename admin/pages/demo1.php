@extends('layouts.admin') @section('title','Menu Page') @section('content')
<div class="my-3 my-md-5">
    <div class="container">
        {{-- Title --}}
        <div class="page-header">
            <h1 class="page-title">
                Tạo mới sản phẩm
            </h1>
        </div>
        <div class="row row-cards row-deck">
            <div class="col-12">
                {{-- Form --}}
                <form class="">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <fieldset class="form-fieldset">
                            <div class="form-group">
                                {{-- Select category --}}
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
                                <label class="form-label">Chọn category phụ</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            {{-- Price --}}
                            <div class="form-group">
                                <label class="form-label">Nhập giá</label>
                                <input type="text" class="form-control" />
                            </div>
                            {{-- Input quantity --}}
                            <div class="form-group">
                                <label class="form-label">Nhập số lượng</label>
                                <input type="text" class="form-control" />
                            </div>
                        </fieldset>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            {{-- Select color --}}
                            <div class="form-group">
                                <label class="form-label">Chọn màu</label>
                                <div class="row gutters-xs">
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="azure" class="colorinput-input" />
                                            <span class="colorinput-color bg-white"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="azure" class="colorinput-input" />
                                            <span class="colorinput-color bg-dark"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="azure" class="colorinput-input" />
                                            <span class="colorinput-color bg-azure"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="indigo" class="colorinput-input" checked/>
                                            <span class="colorinput-color bg-indigo"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="purple" class="colorinput-input" />
                                            <span class="colorinput-color bg-purple"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="pink" class="colorinput-input" />
                                            <span class="colorinput-color bg-pink"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="red" class="colorinput-input" />
                                            <span class="colorinput-color bg-red"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="orange" class="colorinput-input" />
                                            <span class="colorinput-color bg-orange"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="yellow" class="colorinput-input" />
                                            <span class="colorinput-color bg-yellow"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="lime" class="colorinput-input" />
                                            <span class="colorinput-color bg-lime"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="green" class="colorinput-input" />
                                            <span class="colorinput-color bg-green"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="teal" class="colorinput-input" />
                                            <span class="colorinput-color bg-teal"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- Select size --}}
                            <div class="form-group">
                                <label class="form-label">Chọn size</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">7</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">8</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">9</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection