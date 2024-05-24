@extends('admin.layouts.admin')
@section('title')
<title>Trang chủ</title>
@endsection

@section('content')
<div id="showcart">

                <form action="{{ route('store')}}" method="post">
                @csrf
                <input type="hidden" name="editvalue">
                <input type="hidden" name="idLoaiSP">
                    <h1>Thêm loại sản phẩm</h1>
                    <div class="add_info" style="display: block;">
                        <h4>Tên loại sản phẩm</h4>
                        <input type="text" name="tenLoaiSP" id="tenLoaiSP">
                    </div>
                    <div class="add_info" >
                        <h4>Status</h4>
                        <input type="text" name="Status" id="Status">
                    </div>
                    <div class="add_info_mota" style="float:right;display: block;margin-top:-75px; margin-right:50px">
                        <h4>Mô tả</h4>
                        <textarea name="mota" id="mota" cols="90" rows="5"></textarea>
                    </div>
                    <div class="btn_info">
                        <div class="btn_add">
                            <input type="submit" value="Thêm">
                        </div>
                        <div class="btn_exit">
                            <a href="{{Route('indexLSP')}}">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>

@endsection