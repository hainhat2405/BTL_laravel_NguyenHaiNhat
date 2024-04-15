@extends('Admin.layouts.index')
@section('title')
<title>Danh sách danh mục bài viết</title>
@endsection

@section('content')
<div class="container-fluid pt-4 px-4">
    <h1>Bài viết</h1>
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
                                    <th scope="col">Title</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Hình ảnh</th> 
                                    <th scope="col">Ngày đăng</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Chi tiết</th>
                                    <th scope="col">Sửa</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
								@foreach($blog as $blog)
								<tr>
									<td>{{ $i++ }}</td>
									<td>{{ $blog->title }}</td>
                                    <td>{{ $blog->content }}</td>
                                    <td><img src="/img/{{ $blog->image }}" alt="" style="width:90px;"></td>
                                    <td>{{ $blog->publish_date }}</td>
									<td><input type="checkbox" {{ $blog->Status ? 'checked' : '' }}></td>
                                    <td><a href="{{route('show-blog',$blog->id)}}" class="btn btn-primary" >Chi tiết</a></td>
									<td><a href="{{route('edit-blog',$blog->id)}}" class="btn btn-warning">Edit</a></td>
									<td><a href="{{route('destroy-blog',$blog->id)}}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xoá</a></td>
								</tr>
								@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection