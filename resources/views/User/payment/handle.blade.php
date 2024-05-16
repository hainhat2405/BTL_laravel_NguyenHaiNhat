@extends('User.payment.payment')
@section('title')
<title>Quản lý đơn hàng</title>
@endsection

@section('content')
<div id="quanlysp" class="tab-content-item"> 
            <h1>Chờ xử lý</h1>
            <form action="" method="POST" class="form-group">
                <table class="tbl-main">
                <tr class="tr1">
                    <th>STT</th>
                    <th>Mã hàng</th>
                    <th>Tổng giá tiền</th>
                    <th>Xem</th>
                    <th>Chức năng</th>
                    
                </tr>
                        <tbody>
                        @php $i = 1; @endphp
                                @foreach($all_order as $v_content)
                                <?php
                                if($v_content->order_status == 0){
                                    ?>
                                <tbody id="mycart2">
                                    <td  style="color:black;text-align: center;width:10%">{{$i++}}</td>
                                    <td style="color:black;text-align: center;" class="tbl2">{{ $v_content->order_code }}</td>
                                    <td style="color:black;text-align: center;" class="tbl3">{{ $v_content->order_total }}</td>     
                                    <td style="color:black;text-align: center;"><a href="{{route('show-order',$v_content->order_id)}}" id="btn_a" class="btn btn-warning" >Chi tiết</a></td>                    
                                    <td style="color:black;text-align: center;"><a href="{{route('UnConfirm',$v_content->order_id)}}" id="btn_b" class="btn btn-primary" onclick="return confirm('Bạn có muốn hủy không?')">Hủy đơn hàng</a></td>
                                    
                                </tbody>
                                <?php
                                }
                                ?>
                                @endforeach
                </tbody>
                    </table>
                </table>
             </form>
            
            </table>
           
        </div>
@endsection