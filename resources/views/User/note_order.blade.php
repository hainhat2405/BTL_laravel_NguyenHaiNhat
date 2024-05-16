<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/GioHang.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="img/icon-td.jpg">
    <title>Giỏ hàng</title>
</head>
<body>
    <!-- Begin header -->
    @include('User.partials.header')
    <!-- End header -->

     <!-- Begin menu -->
     @include('User.partials.menu')
    <!-- End menu -->

    <div class="gioiThieu-tieude">
        <div class="breadcrumbs">
            <span >
                <span>
                    <a href="TrangChu.html" style="text-decoration: none;">Trang chủ</a>
                </span>
                &raquo;
                <span>Note</span>
            </span>
        </div>
    </div>
    <?php
            $content = Cart::content();
            // echo '<pre>';
            // print_r($content);
            // echo '</pre>';
        ?>

     <!-- Begin content -->
     <?php
if(count($content) > 0){
?>
<div id="container1">
    

    <div id="info-gioHang">
        <div class="ttmuahang">
            <i class="fa-brands fa-bitcoin" style="color: white;background: rgb(252, 155, 51);padding: 15px;"></i>
            <a href="{{URL::to('/home')}}" style="color: white;">Tiếp tục mua hàng</a>
        </div>
        <h1>Giỏ hàng</h1>
        <table class="tbl-main">
        @if(session('error'))
            <div class="alert alert-danger" style="margin-top:20px">
                <h3>{{ session('error') }}</h3>
            </div>
        @endif
            <tr class="tr1">
                <th class="tbl1">Ảnh</th>
                <th class="tbl2">Sản Phẩm</th>
                <th class="tbl3">Số Lượng</th>
                <th class="tbl4">Giá</th>
                <th class="tbl5">Tổng tiền</th>
                <th class="tbl6">Xóa</th>
            </tr>
            <?php foreach($content as $v_content){ ?>
            <tbody id="mycart" style="    border-bottom: 2px solid rgb(96, 177, 38);">
                <td class="tbl1"><img src="/img/<?php echo $v_content->options->image; ?>" alt=""></td>
                <td class="tbl2"><?php echo $v_content->name; ?></td>
                <td class="tbl3">
                    <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                        {{csrf_field()}}
                        <input type="text" style="width:50px;text-align: center;" name="cart_quantity" value="<?php echo $v_content->qty; ?>">
                        <input type="hidden" value="<?php echo $v_content->rowId; ?>" name="rowId_cart">
                        <input type="submit" value="Cập nhật" name="update_qty">
                    </form>
                </td>
                <td class="tbl4"><?php echo number_format($v_content->price).' ' .'VNĐ'; ?></td>
                <td class="tbl5">
                    <?php
                        $subtotal = $v_content->price * $v_content->qty;
                        echo number_format($subtotal) . " " . "VNĐ";
                    ?>
                </td>
                <td class="tbl6">
                    <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}" style="color:rgb(96, 177, 38)"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tbody>
            <?php } ?>
        </table>
        <h1>Lưu ý</h1>
        <form id="noteForm" action="/note_his" method="POST">
            @csrf
            <textarea name="order_note" id="orderNote" rows="4" cols="108"></textarea>
            
        
        <div class="ttdh">
            <div class="Information line">
                <div class="info_splq">
                    <h3 class="h3">
                        <i class="fa-solid fa-camera-retro" style="color: white;background: rgb(96, 177, 38);padding: 10px;"></i>
                        <span>Sản Phẩm Liên Quan</span>
                    </h3>
                </div>
                <div class="info_prodcut">
                    <h2 style="">Tổng tiền:</h2>
                    <h3 style="">{{Cart::priceTotal(0,',','.')}}</h3>
                </div>
                
                <div class="info_prodcut">
                    <h2 style="">Giảm giá:</h2>
                    <h3 style="">0 VNĐ</h3>
                </div>
                <div class="info_prodcut">
                    <h2 style="">Thành tiền:</h2>
                    <h3 style="">{{Cart::priceTotal(0,',','.')}}</h3>
                </div>
            </div>
            <div class="inp-tt">
                <i class="fa-brands fa-bitcoin" style="color: white;background: rgb(252, 155, 51);padding: 12px;float:left;width:6%;height:40px"></i>
                <input type="submit" value="Thanh toán"></input>
            </div>
                            
    
</div>
</form>
        </div>

        
    </div>
    
</div>
<?php
}
else{
?>  
<h1 style="text-align: center;">Không có sản phẩm <a href="{{URL::to('/home')}}" style="text-align: center;">Mua ngay</a></h1>

<?php
}
?>

<!-- elseif($customer_id !=NULL && $khachhang_id !=NULL){
                        ?><a href="{{URL::to('/payment')}}">Thanh toán</a>} -->
    <!-- Begin footer -->
    @include('User.partials.footer')
    <!-- <script src="js/SanPham.js"></script>
    <script>

        showgiohang1();
        showgiohang();
    </script> -->
    <!-- End footer -->
</body>
</html>
