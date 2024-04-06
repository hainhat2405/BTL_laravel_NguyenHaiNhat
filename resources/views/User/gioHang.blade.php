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
        <div id="info-gioHang">
            <div class="ttmuahang">
                <i class="fa-brands fa-bitcoin" style="color: white;background: rgb(252, 155, 51);padding: 15px;"></i>
                <a href="SanPham.html" style="color: white;">Tiếp tục mua hàng</a>
            </div>

            <form action="" method="POST" class="form-group">
               <table class="tbl-main">
                    <tr class="tr1">
                        <th class="tbl1">Ảnh</th>
                        <th class="tbl2">Sản Phẩm</th>
                        <th class="tbl3">Số Lượng</th>
                        <th class="tbl4">Giá</th>
                        <th class="tbl5"></th>
                    </tr>

                    <tbody id="mycart" >

                    </tbody>
                    <script>showgiohang();</script>
                    <tbody id="mycart111" >

                    </tbody>
                    <script>showgiohang1();</script>

               </table>

            </form>
            <div class="capnhat">
                <i class="fa-brands fa-bitcoin" style="color: white;background: rgb(252, 155, 51);padding: 15px;"></i>
                <a href="{{ route('thanhToan') }}"style="color: white;" >Thanh Toán</a>
            </div>

        </div>
        <!-- <div class="ttdh">
            <div class="Information line">
                <h3 class="h3">
                    <i class="fa-solid fa-camera-retro" style="color: white;background: rgb(96, 177, 38);padding: 10px;"></i>
                    <span>Sản Phẩm Liên Quan</span>
                </h3>
                <div id="mycart1"></div>
            </div>
            <div class="thanhToan">
                <i class="fa-brands fa-bitcoin" style="color: white;background: rgb(252, 155, 51);padding: 15px;"></i>
                <a href="ThanhToan.html">Thanh toán</a>
            </div>

        </div> -->
    </div>

    <!-- Begin footer -->
    @include('User.partials.footer')
    <script src="js/SanPham.js"></script>
    <script>

        showgiohang1();
        showgiohang();
    </script>
    <!-- End footer -->
</body>
</html>
