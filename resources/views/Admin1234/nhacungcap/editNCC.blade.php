@extends('Admin.layouts.index')
@section('title')
<title>Sửa thông tin nhân viên</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Sửa thông tin khách hàng: {{$ncc->idNhaCungCap}}</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        <form action="{{route('updateNCC',['idNhaCungCap' => $ncc->idNhaCungCap])}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="editvalue">
            <input type="hidden" name="idNhaCungCap">
            <table>
            <thead>
            <tr>
                    <td>ID nhà cung cấp:</td>
                    <td><input type='text' name='idNhaCungCap' id='idNhaCungCap' value='{{$ncc->idNhaCungCap}}'></td>                  
                </tr>
                <tr>
                    <td>Tên nhà cung cấp:</td>
                    <td><input type='text' name='tenNhaCungCap' id='tenNhaCungCap' value='{{$ncc->tenNhaCungCap}}'></td>                  
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type='text' name='Status' id='Status' value='{{$ncc->Status}}'></td>                  
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type='text' name='diaChi' id='diaChi' value='{{$ncc->diaChi}}'></td>                  
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type='text' name='soDienThoai' id='soDienThoai' value='{{$ncc->soDienThoai}}'></td>                  
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type='text' name='email' id='email' value='{{$ncc->email}}'></td>                  
                </tr>
                            
            </thead> 
        </table> 
        <div class="form-actions">
            <button type="submit" class="btn btn-primary" name="cmd">Save</button>                          
            <button type="reset" class="btn">Cancel</button>
		</div>
        </form>            
    </div>
</div>
@endsection

