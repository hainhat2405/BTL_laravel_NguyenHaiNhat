@extends('Admin.layouts.index')
@section('title')
<title>Danh sách danh mục Hóa Đơn Bán</title>
@endsection

@section('content')
<div class="container-fluid pt-4 px-4">
    <h1>Hóa Đơn Bán</h1>
            @if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">STT</th>
                                    <th scope="col">ID Khách Hàng</th>
                                    <th scope="col">Địa chị</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Ngày sinh</th>    
                                    <th scope="col">Email</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Chi tiết</th>
                                    <th scope="col">Sửa</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection