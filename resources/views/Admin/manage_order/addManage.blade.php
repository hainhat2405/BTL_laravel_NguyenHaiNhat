@extends('Admin.layouts.index')
@section('title')
<title>Thêm thông tin khách hàng</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span></h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <h1>Thêm thông tin khách hàng</h1>
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        <form action="{{ route('storeKH')}}" method="post">
            @csrf
            <input type="hidden" name="editvalue">
            <input type="hidden" name="idKhachHang">
            <table>
            <thead>
                
                <tr>
                    <td>Tên khách hàng</td>
                    <td><input type="text" name="tenKhachHang" id="tenKhachHang"></td>                  
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type="text" name="Status" id="Status"></td>                  
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="diaChi" id="diaChi"></td>                  
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type="text" name="soDienThoai" id="soDienThoai"></td>                  
                </tr>
                <tr>
                    <td>Ngày Sinh</td>
                    <td><input type="date" name="ngaySinh" id="ngaySinh"></td>                  
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email"></td>                  
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
