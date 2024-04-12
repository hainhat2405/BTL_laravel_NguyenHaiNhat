<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/GioHang.css">
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
                <span>Giỏ hàng </span>
            </span>
        </div>
    </div>

     <!-- Begin content -->
    <div id="container1">
        <h1>Giỏ hàng</h1>
        <?php
            $content = Cart::content();
            // echo '<pre>';
            // print_r($content);
            // echo '</pre>';
        ?>
        <div id="info-gioHang">
            <div class="ttmuahang">
                <i class="fa-brands fa-bitcoin" style="color: white;background: rgb(252, 155, 51);padding: 15px;"></i>
                <a href="SanPham.html" style="color: white;">Tiếp tục mua hàng</a>
            </div>
            
            
               <table class="tbl-main">
                    <tr class="tr1">
                        <th class="tbl1">Ảnh</th>
                        <th class="tbl2">Sản Phẩm</th>
                        <th class="tbl3">Số Lượng</th>
                        <th class="tbl4">Giá</th>
                        <th class="tbl5">Tổng tiền</th>
                        <th class="tbl6">Xóa</th>
                    </tr>
                    @foreach($content as $v_content)
                    <tbody id="mycart" >
                        <th class="tbl1"><img src="/img/{{$v_content->options->image}}" alt=""></th>
                        <th class="tbl2">{{$v_content->name}}</th>
                        <th class="tbl3">
                            <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                {{csrf_field()}}
                                <input type="text" style="width:50px;text-align: center;" name="cart_quantity" value="{{$v_content->qty}}">
                                <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart">
                                <input type="submit" value="Cập nhật" name="update_qty">
                            </form>
                        </th>
                        <th class="tbl4">{{number_format($v_content->price).' ' .'VNĐ'}}</th>
                        <th class="tbl5">
                            <?php
                                $subtotal = $v_content->price * $v_content->qty;
                                echo number_format($subtotal) . " " . "VNĐ";
                            ?>
                        </th>
                        <th class="tbl6">
                            <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}">Xóa</a>
                        </th>
                    </tbody>
                    @endforeach
                    <!-- <script>showgiohang();</script>
                    <tbody id="mycart111" >

                    </tbody>
                    <script>showgiohang1();</script> -->

               </table>

            
            <!-- <div class="capnhat">
                <i class="fa-brands fa-bitcoin" style="color: white;background: rgb(252, 155, 51);padding: 15px;"></i>
                <a href="{{ route('thanhToan') }}"style="color: white;" >Thanh Toán</a>
            </div> -->

        </div>
        <div class="ttdh">
            <div class="Information line">
                <div class="info_product">
                    <h3 class="h3">
                        <i class="fa-solid fa-camera-retro" style="color: white;background: rgb(96, 177, 38);padding: 10px;"></i>
                        <span>Sản Phẩm Liên Quan</span>
                    </h3>
                </div>
                <div class="info_prodcut">
                    <h2 style="">Tổng tiền:</h2>
                    <h3 style="">{{Cart::subtotal() . ' ' . 'VNĐ'}}</h3>
                    <!-- <p style=""></p>
                    <p style=""></p><p>Giảm giá:</p>
                    <p style=""></p><p>Tổng số tiền thanh toán:</p><h3>{{Cart::total() . ' ' . 'VNĐ'}}</h3> -->
                </div>
                <div class="info_prodcut">
                    <h2 style="">Giảm giá:</h2>
                    <h3 style=""></h3>
                    <!-- <p style=""></p>
                    <p style=""></p><p>Giảm giá:</p>
                    <p style=""></p><p>Tổng số tiền thanh toán:</p><h3>{{Cart::total() . ' ' . 'VNĐ'}}</h3> -->
                </div>
                <div class="info_prodcut">
                    <h2 style="">Thành tiền:</h2>
                    <h3 style="">{{Cart::subtotal() . ' ' . 'VNĐ'}}</h3>
                    <!-- <p style=""></p>
                    <p style=""></p><p>Giảm giá:</p>
                    <p style=""></p><p>Tổng số tiền thanh toán:</p><h3>{{Cart::total() . ' ' . 'VNĐ'}}</h3> -->
                </div>
            </div>
            <div class="thanhToan">
                <i class="fa-brands fa-bitcoin" style="color: white;background: rgb(252, 155, 51);padding: 15px;"></i>
                <a href="{{URL::to('/checkout')}}">Thanh toán</a>
            </div>

        </div>
    </div>

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
