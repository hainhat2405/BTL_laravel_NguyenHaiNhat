@extends('User.payment.payment')
@section('title')
<title>Quản lý đơn hàng</title>
@endsection

@section('content')
<div id="showcart">
    
                    <h1>Chi tiết thông tin đơn hàng : {{$order_byID->order_code}}</h1>
                    <h2 style="padding-left:40%;padding-top:10px">Thông tin đơn hàng</h2>
                    
                    <table class="tbl-main">
                        <thead>
                            <tr class="tr1">
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá bán</th>
                                <th>Tổng tiền</th>

                            </tr>
                        </thead>
                        @php $i = 1; @endphp
                        
                        <tbody>
                        @foreach($order as $order_byID)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$order_byID->tenSanPham}}</td>
                                <td>{{$order_byID->product_sales_quantity}}</td>
                                <td>{{$order_byID->giaBan}}</td>
                                <td>{{$order_byID->product_sales_quantity * $order_byID->giaBan}}</td>
                            </tr>
                            @endforeach
                            <tr >
                                <th colspan="5">Tổng tiền: {{$order_byID->order_total . "VNĐ"}}</th>

                            </tr>
                        </tbody>
                       
                    </table>
                    
                
            </div>
@endsection