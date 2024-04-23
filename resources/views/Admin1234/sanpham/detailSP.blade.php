@extends('Admin.layouts.index')
@section('title')
<title>Danh sách danh mục</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Chi tiết sản phẩm : {{$idSanPham}}</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        <table>
            <thead>
                <tr>
                    <td>ID Sản Phẩm:</td>      
                    <td>{{$idSanPham}}</td>            
                </tr>
                <tr>
                    <td>Tên Sản Phẩm:</td>      
                    <td>{{$tenSanPham}}</td>            
                </tr>
                <tr>
                    <td>Hình Ảnh<td>      
                    <td><img src="/img/{{$hinhAnh}}" alt="" style="width:200px;"></td>            
                </tr>
                <tr>
                    <td>ID Loại SP</td>      
                    <td>{{$idLoaiSP}}</td>            
                </tr>
                <tr>
                    <td>Status</td>      
                    <td>{{$Status}}</td>            
                </tr>
                <tr>
                    <td>Mô tả:</td>      
                    <td>{{$moTa}}</td>            
                </tr>
                <tr>
                    <td>Giá Bán</td>      
                    <td>{{$giaBan}}</td>            
                </tr>
                <tr>
                    <td>Số Lượng</td>      
                    <td>{{$soLuong}}</td>            
                </tr>
                
                
                </thead> 
        </table>            
    </div>
</div>
@endsection