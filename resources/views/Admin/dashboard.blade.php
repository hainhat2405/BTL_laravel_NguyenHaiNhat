@extends('admin.layouts.admin')
@section('title')
<title>Trang chủ</title>
@endsection

@section('content')
<div id="list-quanly" class="tab-content-item">
            <div class="quanly active" style="background: rgb(255, 142, 1);">
                <i class="fa-solid fa-tv"></i>
                <a href="#quanlysp"><h3>Quản lý sản phẩm</h3></a>
            </div>
            <div class="quanly" style="background: rgb(1, 170, 177);">
                <i class="fa-sharp fa-solid fa-sun"></i>
                <h3>Quản lý loại sản phẩm</h3>
            </div>
            <div class="quanly" style="background: rgb(125, 187, 0);">
                <i class="fa-solid fa-battery-full"></i>
                <h3>Quản lý slide show</h3>
            </div>
            <div class="quanly" style="background: rgb(0, 111, 203);">
                <i class="fa-solid fa-rectangle-ad"></i>
                <h3>Quản lý chuyên mục</h3>
            </div>
            <div class="quanly" style="background: rgb(197, 38, 32);">
                <i class="fa-regular fa-user"></i>
                <h3>Quản lý nhà cung cấp</h3>    
            </div>
            <div class="quanly" style="background: rgb(1, 170, 177);">
                <i class="fa-sharp fa-solid fa-sun"></i>
                <h3>Quản lý nhập hàng</h3>    
            </div>
            <div class="quanly" style="background: rgb(125, 187, 0);">
                <i class="fa-solid fa-battery-full"></i>
                <h3>Quản lý bán hàng</h3>    
            </div>
            <div class="quanly" style="background: rgb(0, 111, 203);">
                <i class="fa-solid fa-rectangle-ad"></i>
                <h3>Quản lý quảng cáo</h3>    
            </div>
            <div class="quanly" style="background: rgb(255, 142, 1);">
                <i class="fa-solid fa-tv"></i>
                <h3>Quản lý tài khoản</h3>    
            </div>
            <div class="quanly" style="background: rgb(1, 170, 177);">
                <i class="fa-sharp fa-solid fa-sun"></i>
                <h3>Quản lý hàng sản xuất</h3>    
            </div>
        </div>
        
        
@endsection