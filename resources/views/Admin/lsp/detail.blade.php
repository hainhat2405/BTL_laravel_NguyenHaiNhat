@extends('Admin.layouts.index')
@section('title')
<title>Danh sách danh mục</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Chi tiết sản phẩm : {{$idLoaiSP}}</h2>
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
                    <td>ID Loại Sản Phẩm:</td>      
                    <td>{{$idLoaiSP}}</td>            
                </tr>
                <tr>
                    <td>Tên Loại Sản Phẩm:</td>      
                    <td>{{$tenLoaiSP}}</td>            
                </tr>
                <tr>
                    <td>Status:</td>      
                    <td>{{$Status}}</td>            
                </tr>
                <tr>
                    <td>Mô tả:</td>      
                    <td>{{$mota}}</td>            
                </tr>
                </thead> 
        </table>            
    </div>
</div>
@endsection