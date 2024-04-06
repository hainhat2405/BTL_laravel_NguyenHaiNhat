@extends('Admin.layouts.index')
@section('title')
<title>Chi tiết thông tin nhà cung cấp</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Chi tiết thông tin nhà cung cấp : {{$idNhaCungCap}}</h2>
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
                    <td>ID nhà cung cấp:</td>      
                    <td>{{$idNhaCungCap}}</td>            
                </tr>
                <tr>
                    <td>Tên nhà cung cấp:</td>      
                    <td>{{$tenNhaCungCap}}</td>            
                </tr>
                <tr>
                    <td>Status:</td>      
                    <td>{{$Status}}</td>            
                </tr>
                <tr>
                    <td>Địa chỉ:</td>      
                    <td>{{$diaChi}}</td>            
                </tr>
                <tr>
                    <td>Số điện thoại:</td>      
                    <td>{{$soDienThoai}}</td>            
                </tr>
                <tr>
                    <td>Email:</td>      
                    <td>{{$email}}</td>            
                </tr>
                </thead> 
        </table>            
    </div>
</div>
@endsection