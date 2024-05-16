@extends('User.payment.payment')
@section('title')
<title>Quản lý đơn hàng</title>
@endsection

@section('content')
<div id="quanlysp" class="tab-content-item"> 
            @if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif
            <h1>Hủy hàng</h1>
            <form action="" method="POST" class="form-group">
                <table class="tbl-main">
                <tr class="tr1">
                            <th>STT</th>
                            <th class="tbl1">Ảnh</th>
                            <th class="tbl2">Sản Phẩm</th>
                            <th class="tbl3">Số lượng</th>
                            <th class="tbl3">Giá</th>
                            <th class="tbl3">Tổng tiền</th>
                        </tr>

                                @php $i = 1; @endphp
                                @foreach($all_order as $v_content)
                                <?php
                                if($v_content->order_status == 2){
                                    ?>
                                <tbody id="mycart2">
                                    <td  style="color:black;text-align: center;width:10%">{{$i++}}</td>
                                    <td class="tbl1"><img style="width:100%;height:150px" src="/img/{{$v_content->hinhAnh}}" alt=""></td>
                                    <td style="color:black;text-align: center;" class="tbl2">{{$v_content->tenSanPham}}</td>
                                    <td style="color:black;text-align: center;" class="tbl3">{{$v_content->product_sales_quantity}}</td>
                                    <td style="color:black;text-align: center;" class="tbl4">{{number_format($v_content->giaBan).' ' .'VNĐ'}}</td>
                                    <td style="color:black;text-align: center;" class="tbl5">
                                        <?php
                                            $subtotal = $v_content->giaBan * $v_content->product_sales_quantity;
                                            echo number_format($subtotal) . " " . "VNĐ";
                                        ?>
                                    </td>
                                    
                                </tbody>
                                <?php
                                }
                                ?>
                                @endforeach
                                
                        
                        
                    </table>
                </table>
             </form>
            
            </table>
           
        </div>
@endsection