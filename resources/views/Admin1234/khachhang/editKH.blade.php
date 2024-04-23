@extends('Admin.layouts.index')
@section('title')
<title>Sửa thông tin nhân viên</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Sửa thông tin khách hàng: {{$kh->idKhachHang}}</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        <form action="{{ route('updateKH',['idKhachHang' => $kh->idKhachHang])}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="editvalue">
            <input type="hidden" name="idKhachHang">
            <table>
            <thead>
            <tr>
                    <td>ID nhân viên:</td>
                    <td><input type='text' name='idKhachHang' id='idKhachHang' value='{{$kh->idKhachHang}}'></td>                  
                </tr>
                <tr>
                    <td>Tên khách hàng:</td>
                    <td><input type='text' name='tenKhachHang' id='tenKhachHang' value='{{$kh->tenKhachHang}}'></td>                  
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type='text' name='Status' id='Status' value='{{$kh->Status}}'></td>                  
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type='text' name='diaChi' id='diaChi' value='{{$kh->diaChi}}'></td>                  
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type='text' name='soDienThoai' id='soDienThoai' value='{{$kh->soDienThoai}}'></td>                  
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td><input type='date' name='ngaySinh' id='ngaySinh' value='{{$kh->ngaySinh}}'></td>                  
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type='text' name='email' id='email' value='{{$kh->email}}'></td>                  
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

