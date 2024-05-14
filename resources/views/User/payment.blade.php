<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/TTKH.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="img/icon-td.jpg">
    <title> Đại Lý Bánh Kẹo</title>
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

                <span>Thông tin khách hàng</span>
            </span>
        </div>
    </div>

    <div id="container">
        <?php
        ?>
        <!-- <h1>Bạn đã đặt hàng thàng công</h1>
        <div class="donhang">
            <h3 class="h3">
                <i class="fa-solid fa-camera-retro" style="color: white;background: rgb(96, 177, 38);padding: 10px;"></i>
                <span style="color:black">Đơn hàng của bạn</span>
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
                            // echo $content;
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
                </table>
                <h1>Tổng tiền :{{Cart::subtotal()}}
                </h1>
             </form>
        </div> -->
        <?php
        ?>
    </div>
    <!-- Begin footer -->
    @include('User.partials.footer')

    <script src="js/SanPham.js"></script>
    <!-- End footer -->
    <script>
        showttnguoinhan();
        showthanhtoan();


    </script>

</body>
</html>
