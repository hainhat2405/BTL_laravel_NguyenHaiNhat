<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ThanhToan.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="img/icon-td.jpg">
    <title> Thanh Toán</title>
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
                    <a href="TrangChu.html">Trang chủ</a>
                </span>
                &raquo;

                <span>Thanh Toán</span>
            </span>
        </div>
    </div>

    <div id="container">
        <h1>Thanh Toán</h1>
        <!-- <p style="padding-left:150px">Vui lòng đăng nhập hoặc đăng ký để thanh toán giỏ hàng và xem lại lịch sử mua hàng</p> -->
        <div id="ttkh">
            <form action="{{URL::to('/save-checkout-customer')}}" method="post">
            {{csrf_field()}}
                <div class="gioiThieu-DMSP">
                    <h3 class="h3">
                        <span>Danh mục sản phẩm</span>
                    </h3>
                    
                </div>
                <div class="ttkh1">
                    <div class="namekh">
                        <span>
                            <i class="fa fa-address-card"></i>
                        </span>
                        <input type="text" name="tenKhachHang" id="txtnamekh" placeholder="Họ và tên" onblur="chkname()">
                        <span id="chkName" style="color: red;display: inline;"></span>

                    </div>

                    <div class="sdtkh">
                        <span>
                            <i class="fa fa-phone"></i>
                        </span>
                        <input type="text" name="soDienThoai" id="txtsdtkh" placeholder="Số điện thoại" onblur="chksdt()">
                        <span id="chkSdt" style="color: red;display: inline;"></span>
                    </div>
                </div>

                <div class="ttkh2">
                    <div class="emailkh">
                        <span>
                            <i class="fa fa-envelope-open"></i>
                        </span>
                        <input type="email" name="email" id="txtemailkh" placeholder="Nhập chính xác Email để kiểm tra đơn hàng" onblur="chkemail()">
                        <span id="chkEmail" style="color: red;display: inline;"></span>
                    </div>
                </div>
                
                <div class="ttkh4">
                    <div class="sonha">
                        <span>
                            <i class="fa fa-map-marker"></i>
                        </span>
                        <input type="text" name="diaChi" id="txtsonha" placeholder="Vui lòng điền số nhà, đường tránh trường hợp đơn hàng bị hủy ngoài ý muốn" onblur="chksonha()">
                        <span id="chkSonha" style="color: red;display: inline;"></span>
                    </div>
                </div>


                <div class="ttkh5">
                    <div class="note">
                        <span>
                            <i class="fa fa-comments"></i>
                        </span>
                        <input type="date" style="height:46px" name="ngaySinh" id="ngaySinh" placeholder="ngay sinh" onblur="chksonha()">
                    </div>
                </div>
                <div class="ttkh6">
                        
                        <div class="chkTt">
                            <div class="check">
                                <input type="radio" id="chk-sknh" name="chk1" checked>
                            </div>
                            <input type="text" name="payment_option" id="txtTt" value="1">
                        </div>
                        <div class="chkTt" style="margin-top: 10px;">
                            <div class="check">
                                <input type="radio" id="chk-sknh" name="chk1">
                            </div>
                            <input type="text" name="payment_option" id="txtsonha" value="2">
                        </div>
                </div>

                <input type="submit" class="dongy"  onclick="dongydathang()" style="color:white;font-size: 20px;" value="Hoàn tất đơn hàng">
            </form>


        </div>

            <div class="donhang">
                <h3 class="h3">
                    <i class="fa-solid fa-camera-retro" style="color: white;background: rgb(96, 177, 38);padding: 10px;"></i>
                    <span>Đơn hàng của bạn</span>
                </h3>
                <form action="" method="POST" class="form-group">
                    <table class="tbl-main">
                        <tr class="tr1">
                            <th class="tbl1">Ảnh</th>
                            <th class="tbl2">Sản Phẩm</th>
                            <th class="tbl3">Số lượng</th>
                            <th class="tbl3">Giá</th>
                            <th class="tbl3">Tổng tiền</th>
                        </tr>
                        <?php
                            $content = Cart::content();
                            // echo '<pre>';
                            // print_r($content);
                            // echo '</pre>';
                        ?>
                        
                        @foreach($content as $v_content)
                        <tbody id="mycart2">
                            <td class="tbl1"><img style="width:100%" src="/img/{{$v_content->options->image}}" alt=""></td>
                            <td style="color:black;text-align: center;" class="tbl2">{{$v_content->name}}</td>
                            <td style="color:black;text-align: center;" class="tbl3">{{$v_content->qty}}</td>
                            <td style="color:black;text-align: center;" class="tbl4">{{number_format($v_content->price).' ' .'VNĐ'}}</td>
                            <td style="color:black;text-align: center;" class="tbl5">
                                <?php
                                    $subtotal = $v_content->price * $v_content->qty;
                                    echo number_format($subtotal) . " " . "VNĐ";
                                ?>
                            </td>
                            
                        </tbody>
                        @endforeach
                    </table>
                </form>
            </div>
        </div>
    </div>
    <!-- Begin footer -->
    @include('User.partials.footer')


</body>
</html>

