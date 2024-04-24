@extends('Admin1234.layouts.index')
@section('title')
<title>Chi tiết thông tin đơn hàng</title>
@endsection

@section('content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2 style="text-align:center"><i class="halflings-icon white user"></i><span class="break"></span>Chi tiết thông tin đơn hàng : {{$order_byID->order_id}}</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4" >
                        <h2 class="mb-0" >Thông tin khách hàng</h2>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Tên khách hàng</th>
                                    <th scope="col">Số điện thoại</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$order_byID->Customer_name}}</td>
                                    <td>{{$order_byID->Customer_phone}}</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
    </div>
    <br>
    <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="mb-0" style="text-align: center;">Liệt kê chi tiết</h2>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$order_byID->tenSanPham}}</td>
                                    <td>{{$order_byID->product_sales_quantity}}</td>
                                    <td>{{$order_byID->giaBan}}</td>
                                    <td>{{$order_byID->product_sales_quantity * $order_byID->giaBan}}</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
    </div>
</div>
@endsection