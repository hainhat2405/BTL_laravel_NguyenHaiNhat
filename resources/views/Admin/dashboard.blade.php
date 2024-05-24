@extends('admin.layouts.admin')
@section('title')
<title>Trang chủ</title>
@endsection

@section('content')
<div class="row">
    <p class="title_thongke">Thống kê đơn hàng doanh số</p>
    <form autocomplete="off">
        @csrf
        <div class="col-md-2">
            <p>Từ ngày: <input type="text" id="datepicker" class="form-control"></p>
            <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lọc kết quả"></p>
        </div>
        <div class="col-md-2">
            <p>Đến ngày: <input type="text" id="datepicker2" class="form-control"></p>
        </div>
        <div class="col-md-2">
            <p>
            Lọc theo:
            <select class="dashboard-filter form-control">
                <option>--Chọn--</option>
                <option value="7ngay">7 ngày qua</option>
                <option value="thangtruoc">tháng trước</option>
                <option value="thangnay">tháng này</option>
                <option value="365ngayqua">365 ngày qua</option>
            </select>
            </p>
        </div>
    </form>
</div>
<div class="col-md-12">
    <div id="myfirstchart" style="height: 250px;"></div>
</div>

<div class="row">
    <style type="text/css">
        table.table.table-bordered.table-dark {
            background: #32383e;
        }
        table.table.table-bordered.table-dark tr th {
            color: #fff;
        }
    </style>
    <p class="title_thongke">Thống kê truy cập</p>
</div>
<!-- 
<div id="list-quanly" class="tab-content-item">
            <div class="quanly active" style="background: rgb(255, 142, 1);">
            <i class="fa fa-dice-one"></i>
                <a href="{{route('indexSP')}}"><h3>Quản lý sản phẩm</h3></a>
            </div>
            <div class="quanly" style="background: rgb(1, 170, 177);">
            <i class="fa fa-dragon"></i>
                <a href="{{route('indexLSP')}}"><h3>Quản lý loại sản phẩm</h3></a>
            </div>
            <div class="quanly" style="background: rgb(125, 187, 0);">
            <i class="fab fa-evernote"></i>

                <a href="{{route('indexKH')}}"><h3>Quản lý khách hàng</h3></a>
            </div>
            <div class="quanly" style="background: rgb(0, 111, 203);">
            <i class="fab fa-ups"></i>
                <a href="{{route('indexNV')}}"><h3>Quản lý Nhân viên</h3></a>
            </div>
            <div class="quanly" style="background: rgb(197, 38, 32);">
            <i class="fab fa-fort-awesome-alt"></i>
                <a href="{{route('indexNCC')}}"><h3>Quản lý nhà cung cấp</h3></a>   
            </div>
            <div class="quanly" style="background: rgb(1, 170, 177);">
            <i class="fa fa-blog"></i>
                <a href="{{route('blog')}}"><h3>Quản lý bài viết</h3></a>   
            </div>
            <div class="quanly" style="background: rgb(125, 187, 0);">
            <i class="fa fa-dolly"></i>
                <a href="{{route('manage_order')}}"><h3>Quản lý đơn hàng</h3></a>   
            </div>
            <div class="quanly" style="background: rgb(125, 187, 0);">
            <i class="fa fa-wallet"></i>
                <a href="{{route('indexHDB')}}"><h3>Quản lý hóa đơn bán</h3></a>   
            </div>
            <div class="quanly" style="background: rgb(0, 111, 203);">
            <i class="fa fa-angry"></i>
                <a href="{{route('impersonate-destroy')}}"><h3>Quản lý tài khoản</h3></a> 
            </div>
        </div>
         -->
        
@endsection