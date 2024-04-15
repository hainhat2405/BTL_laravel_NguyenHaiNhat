@extends('Admin.layouts.index')
@section('title')
<title>Chi tiết thông tin bài viết</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Chi tiết thông tin bài viết : {{$id}}</h2>
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
                    <td>ID:</td>      
                    <td>{{$id}}</td>            
                </tr>
                <tr>
                    <td>Title:</td>      
                    <td>{{$title}}</td>            
                </tr>
                <tr>
                    <td>Status:</td>      
                    <td>{{$Status}}</td>            
                </tr>
                <tr>
                    <td>Content:</td>      
                    <td>{{$content}}</td>            
                </tr>
                <tr>
                    <td>Hình ảnh:</td>      
                    <td>{{$image}}</td>            
                </tr>
                <tr>
                    <td>Ngày đăng:</td>      
                    <td>{{$publish_date}}</td>            
                </tr>
                </thead> 
        </table>            
    </div>
</div>
@endsection