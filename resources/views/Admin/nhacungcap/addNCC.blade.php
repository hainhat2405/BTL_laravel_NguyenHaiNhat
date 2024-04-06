@extends('Admin.layouts.index')
@section('title')
<title>Thêm thông tin nhà cung cấp</title>
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
        <h1>Thêm thông tin nhà cung cấp</h1>
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        <form action="{{ route('storeNCC')}}" method="post">
            @csrf
            <input type="hidden" name="editvalue">
            <input type="hidden" name="idKhachHang">
            <table>
            <thead>
                
                <tr>
                    <td>Tên nhà cung cấp</td>
                    <td><input type="text" name="tenNhaCungCap" id="tenNhaCungCap"></td>                  
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
