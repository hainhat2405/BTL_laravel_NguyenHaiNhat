@extends('admin.layouts.admin')
@section('title')
<title>Quản lý đơn hàng</title>
@endsection

@section('content')
<div id="quanlysp" class="tab-content-item"> 
             <h3>
                <i class="fa-solid fa-arrow-right"></i>
                Quản lý đơn hàng
            </h3>
            <!-- <button style="padding:10px;color: red" onclick="showcart()"><a href="{{route('addNV')}}" style="text-decoration: none;">Thêm</a></button> -->
            @if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif
            <table class="tbl-main">
                <thead>
                <tr class="tr1">
                    <th>STT</th>
                    <th>Tên người đặt</th>
                    <th>Tổng giá tiền</th>
                    <th>Trạng thái</th>
                    <th>Xem</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @php $i = 1; @endphp
				@foreach($all_order as $order_info)
				<tr>
                    <td>{{$i++}}</td>
                    <td>{{ $order_info->Customer_name}}</td>
                    <td>{{ $order_info->order_total }}</td>
					<td>{{ $order_info->order_status }}</td>
                    <td><a href="{{route('view-order',$order_info->order_id)}}" class="btn btn-primary" >Chi tiết</a></td>
					<td><a href="{{route('editNV',$order_info->order_id)}}" class="btn btn-warning">Edit</a></td>
					<td><a href="{{route('destroyNV',$order_info->order_id)}}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xoá</a></td>
				</tr>
				@endforeach
                </tbody>
            </table>
            {{ $order->links('pagination::bootstrap-4') }}
           
        </div>
@endsection