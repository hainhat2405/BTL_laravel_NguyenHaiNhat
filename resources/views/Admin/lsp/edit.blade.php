@extends('Admin.layouts.index')
@section('title')
<title>Sửa sản phẩm</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Sửa sản phẩm: {{$lsp->idLoaiSP}}</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        <form action="{{ route('update',['idLoaiSP' => $lsp->idLoaiSP])}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="editvalue">
            <input type="hidden" name="idLoaiSP">
            <table>
            <thead>
                
                <tr>
                    <td>Tên Loại Sản Phẩm:</td>
                    <td><input type='text' name='tenLoaiSP' id='tenLoaiSP' value='{{$lsp->tenLoaiSP}}'></td>                  
                </tr>
                <tr>
                    <td>Status:</td>
                    <td><input type='text' name='Status' id='Status' value='{{$lsp->Status}}'></td>                  
                </tr>
                <tr>
                    <td>Mô tả:</td>
                    <td>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2"></label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" rows="10" cols="30" name='mota' id='mota' value="{{$lsp->mota}}"></textarea>
                                
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

