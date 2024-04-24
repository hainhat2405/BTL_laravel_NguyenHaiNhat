@extends('Admin1234.layouts.index')
@section('title')
<title>Quản lý đơn hàng</title>
@endsection

@section('content')
<div class="container-fluid pt-4 px-4">
    <h1>Khách hàng</h1>
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
                                    <th scope="col">Tên người đặt</th>
                                    <th scope="col">Tổng giá tiền</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Chi tiết</th>
                                    <th scope="col">Sửa</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
								@foreach($all_order as $all_order)
								<tr>
									<td>{{ $i++ }}</td>
									<td>{{ $all_order->Customer_name}}</td>
                                    <td>{{ $all_order->order_total }}</td>
                                    <td>{{ $all_order->order_status }}</td>
									<td><a href="{{URL::To('/view-order/'.$all_order->order_id)}}" class="btn btn-primary" >Chi tiết</a></td>
									<td><a href="" class="btn btn-warning">Edit</a></td>
									<td><a href="" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xoá</a></td>
								</tr>
								@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection