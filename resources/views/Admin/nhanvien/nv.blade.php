@extends('Admin.layouts.index')
@section('title')
<title>Danh sách danh mục nhân viên</title>
@endsection

@section('content')
<div class="container-fluid pt-4 px-4">
    <h1>Nhân Viên</h1>
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
                                    <th scope="col">Tên</th>
                                    <th scope="col">Hình Ảnh</th>
                                    <th scope="col">Chức vụ</th>
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
                                @php $i = 1; @endphp
								@foreach($nv as $nv)
								<tr>
									<td>{{ $i++ }}</td>
									<td>{{ $nv->tenNhanVien }}</td>
                                    <td><img src="img/{{ $nv->hinhAnh }}" alt="" style="width:150px;"></td>
                                    <td>{{ $nv->chucVu }}</td>
                                    <td>{{ $nv->diaChi }}</td>
                                    <td>{{ $nv->soDienThoai }}</td>
                                    <td>{{ $nv->ngaySinh }}</td>
                                    <td>{{ $nv->email }}</td>
									<td><input type="checkbox" {{ $nv->Status ? 'checked' : '' }}></td>
									<td><a href="{{route('detailNV',$nv->idNhanVien)}}" class="btn btn-primary" >Chi tiết</a></td>
									<td><a href="{{route('editNV',$nv->idNhanVien)}}" class="btn btn-warning">Edit</a></td>
									<td><a href="{{route('destroyNV',$nv->idNhanVien)}}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xoá</a></td>
								</tr>
								@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection