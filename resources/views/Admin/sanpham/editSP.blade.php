@extends('Admin.layouts.index')
@section('title')
<title>Sửa sản phẩm</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Sửa sản phẩm: {{$sp->idSanPham}}</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        <form action="{{ route('updateSP',['idSanPham' => $sp->idSanPham])}}" method="post">
            @csrf
            @method('PUT')
            <table>
            <thead>
                
                <tr>
                    <td>Tên Sản Phẩm</td>
                    <td><input type='text' name='tenSanPham' id='tenSanPham' value='{{$sp->tenSanPham}}'></td>                  
                </tr>
                <tr>
                    <td>ID Loại Sản Phẩm</td>
                    <td><input type='text' name='idLoaiSP' id='idLoaiSP' value='{{$sp->idLoaiSP}}'></td>                  
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type='text' name='Status' id='Status' value='{{$sp->Status}}'></td>                  
                </tr>
                <tr>
                    <td>Giá Bán</td>
                    <td><input type='text' name='giaBan' id='giaBan' value='{{$sp->giaBan}}'></td>                  
                </tr>
                <tr>
                    <td>Số Lượng</td>
                    <td><input type='text' name='soLuong' id='soLuong' value='{{$sp->soLuong}}'></td>                  
                </tr>
                <tr>
                    <td>Hình ảnh</td>
                    <td><img src="/img/{{ $sp->hinhAnh }}" alt="" style="width:90px;"></td>
                    <td><input type='file' name='hinhAnh' id='hinhAnh' value='{{$sp->hinhAnh}}'></td>                  
                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2"></label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" rows="10" cols="30" name='moTa' id='moTa' value="">{{$sp->moTa}}</textarea>
                                
                            </div>
                        </div>
                    </td>
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

