@extends('admin.layouts.admin')
@section('title')
<title>Trang chủ</title>
@endsection

@section('content')
<div id="quanlysp" class="tab-content-item"> 
             <h3>
             <i class="fa-solid fa-arrow-right"></i>
                Quản lý kho hàng
            </h3>
            @if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif
            <table class="tbl-main" >
                <thead>
                <tr class="tr1">
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Tên loại sản phẩm</th>
                    <th>Nhà cung cấp</th>
                    <th>Giá nhập</th>
                    <th>Giá bán</th>
                    <th>Số lượng tồn</th>
                    <th>Xem</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @php $i = 1; @endphp
				@foreach($wh as $info_wh)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{ $info_wh->tenSanPham }}</td>
					<td><img src="img/{{ $info_wh->hinhAnh }}" alt="" style="width:90px;"></td>
                    <td>{{ $info_wh->tenLoaiSP }}</td>
                    <td>{{ $info_wh->tenNhaCungCap }}</td>
                    <td>{{ $info_wh->giaNhap }}</td>
                    <td>{{ $info_wh->giaBan }}</td>
                    <td>{{ $info_wh->soLuongTon }}</td>
				</tr>
				@endforeach
                </tbody>
            </table>
            {{ $wh->links('pagination::bootstrap-4') }}
           
        </div>
@endsection