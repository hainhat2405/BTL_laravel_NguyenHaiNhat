<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/TTKH.css">
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
        <h1>Bạn đã đặt hàng thàng công</h1>
        <div id="infokh">

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
                         <th class="tbl3">Giá</th>
                     </tr>

                     <tbody id="mycart2">
                        <!-- <tr class="tr2">
                            <td class="tbl1" >
                                <img src="img/banhcom.jpg" alt="">
                            </td>
                            <td class="tbl2">
                                <div class="tbl2-info">
                                <a href="SanPham.html" title="Bánh Cốm Hà Nội" style="font-size: 18px;text-decoration: none;color: rgb(224, 12, 61);">Bánh Cốm Hà Nội</a><br><br>
                                <strong style="font-size: 18px;">x2</strong><br><br>
                                <span style="color: rgb(224, 12, 61);font-size: 18px;">Loại:</span>
                                </div>
                            </td>
                            <td class="tbl3"> <span style="color: rgb(224, 12, 61);font-size: 18px;">8.000 đ</span>
                            </td>
                        </tr>
                        <tr class="tr3">
                            <td class="tbl4"><span style="font-size: 18px;">Tổng tiền</span></td>
                            <td class="tbl5"></td>
                            <td class="tbl6">16.000 đ</td>
                        </tr> -->
                     </tbody>
                </table>
             </form>
        </div>

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
