@extends('Admin.layouts.index')
@section('title')
<title>Sửa thông tin nhân viên</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Sửa thông tin nhân viên: {{$nv->idNhanVien}}</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        <form action="{{ route('updateNV',['idNhanVien' => $nv->idNhanVien])}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="editvalue">
            <input type="hidden" name="idNhanVien">
            <table>
            <thead>
            <tr>
                    <td>ID nhân viên:</td>
                    <td><input type='text' name='idNhanVien' id='idNhanVien' value='{{$nv->idNhanVien}}'></td>                  
                </tr>
                <tr>
                    <td>Tên nhân viên:</td>
                    <td><input type='text' name='tenNhanVien' id='tenNhanVien' value='{{$nv->tenNhanVien}}'></td>                  
                </tr>
                <tr>
                    <td>Hình ảnh</td>
                    <td><img src="/img/{{ $nv->hinhAnh }}" alt="" style="width:90px;"></td>
                    <td><input type='file' name='hinhAnh' id='hinhAnh' value='{{$nv->hinhAnh}}'></td>                  
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type='text' name='Status' id='Status' value='{{$nv->Status}}'></td>                  
                </tr>
                <tr>
                    <td>Chức vụ</td>
                    <td><input type='text' name='chucVu' id='chucVu' value='{{$nv->chucVu}}'></td>                  
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type='text' name='diaChi' id='diaChi' value='{{$nv->diaChi}}'></td>                  
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type='text' name='soDienThoai' id='soDienThoai' value='{{$nv->soDienThoai}}'></td>                  
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td><input type='date' name='ngaySinh' id='ngaySinh' value='{{$nv->ngaySinh}}'></td>                  
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type='text' name='email' id='email' value='{{$nv->email}}'></td>                  
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

