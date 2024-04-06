@extends('Admin.layouts.index')
@section('title')
<title>Danh sách danh mục</title>
@endsection

@section('content')
<div class="container-fluid pt-4 px-4">
    <h1>Loại Sản Phẩm</h1>
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
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Chi tiết</th>
                                    <th scope="col">Sửa</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
								@foreach($lsp as $lsp)
								<tr>
									<td>{{ $i++ }}</td>
									<td>{{ $lsp->tenLoaiSP }}</td>
									<td><input type="checkbox" {{ $lsp->Status ? 'checked' : '' }}></td>
									<td><a href="{{route('detail',$lsp->idLoaiSP)}}" class="btn btn-primary" >Chi tiết</a></td>
									<td><a href="{{route('edit',$lsp->idLoaiSP)}}" class="btn btn-warning">Edit</a></td>
									<td><a href="{{route('destroy',$lsp->idLoaiSP)}}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xoá</a></td>
								</tr>
								@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection