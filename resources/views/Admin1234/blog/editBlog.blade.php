@extends('Admin.layouts.index')
@section('title')
<title>Sửa thông tin nhân viên</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Sửa thông tin khách hàng: {{$blog->id}}</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        <form action="{{ route('update-blog',['id' => $blog->id])}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="editvalue">
            <input type="hidden" name="id">
            <table>
            <thead>
            <tr>
                    <td>ID Bài viết:</td>
                    <td><input type='text' name='id' id='id' value='{{$blog->id}}'></td>                  
                </tr>
                <tr>
                    <td>Status:</td>
                    <td><input type='text' name='Status' id='Status' value='{{$blog->Status}}'></td>                  
                </tr>
                <tr>
                    <td>Title:</td>
                    <td><input type='text' name='title' id='title' value='{{$blog->title}}'></td>                  
                </tr>
                
                <tr>
                    <td>Content:</td>
                    <td><input type='text' name='content' id='content' value='{{$blog->content}}'></td>                  
                </tr>
                <tr>
                    <td>Hình ảnh:</td>
                    <td><input type='file' name='image' id='image' value='{{$blog->image}}'></td>                  
                </tr>
                <tr>
                    <td>Ngày đăng</td>
                    <td><input type='date' name='publish_date' id='publish_date' value='{{$blog->publish_date}}'></td>                  
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

