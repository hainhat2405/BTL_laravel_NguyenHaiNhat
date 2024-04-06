<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ThanhToan.css">
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
        <div id="ttkh">
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
                    <input type="text" name="txtnamekh" id="txtnamekh" placeholder="Họ và tên" onblur="chkname()">
                    <span id="chkName" style="color: red;display: inline;"></span>

                </div>

                <div class="sdtkh">
                    <span>
                        <i class="fa fa-phone"></i>
                    </span>
                    <input type="text" name="txtsdtkh" id="txtsdtkh" placeholder="Số điện thoại" onblur="chksdt()">
                    <span id="chkSdt" style="color: red;display: inline;"></span>
                </div>
            </div>

            <div class="ttkh2">
                <div class="emailkh">
                    <span>
                        <i class="fa fa-envelope-open"></i>
                    </span>
                    <input type="email" name="txtemailkh" id="txtemailkh" placeholder="Nhập chính xác Email để kiểm tra đơn hàng" onblur="chkemail()">
                    <span id="chkEmail" style="color: red;display: inline;"></span>
                </div>
            </div>
            <div class="ttkh3">
                <div class="tinhkh">
                    <span>
                        <i class="fa fa-chevron-down"></i>
                    </span>
                    <select name="cities" id="cities" class="vn" onblur="chktinh()">
                        <option value="">Tỉnh/Thành Phố</option>
                        <option value="Hưng Yên">Hưng Yên</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                        <option value="Cà Mau">Cà Mau</option>
                    </select>
                    <span id="chkTinh" style="color: red;display: inline;"></span>
                </div>
                <div class="huyenkh">
                    <span>
                        <i class="fa fa-chevron-down"></i>
                    </span>
                    <select name="district" id="district" class="vn" onblur="chkhuyen()">
                        <option value="">Quận/Huyện</option>
                        <option value="Văn Giang">Văn Giang</option>
                        <option value="Mỹ Hào">Mỹ Hào</option>
                        <option value="Khoái Châu">Khoái Châu</option>
                        <option value="Văn Lâm">Văn Lâm</option>
                    </select>
                    <span id="chkHuyen" style="color: red;display: inline;"></span>
                </div>
                <div class="xakh">
                    <span>
                        <i class="fa fa-chevron-down"></i>
                    </span>
                    <select name="xa" id="xa" class="vn" onblur="chkxa()">
                        <option value="">Phường/Xã</option>
                        <option value="Thị Trấn Văn Giang">Thị Trấn Văn Giang</option>
                        <option value="Long Hưng">Long Hưng</option>
                        <option value="Cửu Cao">Cửu Cao</option>
                        <option value="Thắng Lợi">Thắng Lợi</option>
                    </select>
                    <span id="chkXa" style="color: red;display: inline;"></span>
                </div>
            </div>
            <div class="ttkh4">
                <div class="sonha">
                    <span>
                        <i class="fa fa-map-marker"></i>
                    </span>
                    <input type="text" name="txtsonha" id="txtsonha" placeholder="Vui lòng điền số nhà, đường tránh trường hợp đơn hàng bị hủy ngoài ý muốn" onblur="chksonha()">
                    <span id="chkSonha" style="color: red;display: inline;"></span>
                </div>
            </div>


            <div class="ttkh5">
                <div class="note">
                    <span>
                        <i class="fa fa-comments"></i>
                    </span>
                    <textarea name="txta" id="txta" rows="4" placeholder="Ví dụ: lưu ý khi giao hàng." style="background: #FBFBFC;"></textarea>
                </div>
            </div>
            <div class="ttkh6">
                <div class="chkTt">
                    <div class="check">
                        <input type="radio" id="chk-sknh" name="chk1" checked>
                    </div>
                    <input type="text" name="txtTt" id="txtTt" value="Thanh toán sau khi nhận hàng">
                </div>
                <div class="chkTt" style="margin-top: 10px;">
                    <div class="check">
                        <input type="radio" id="chk-sknh" name="chk1">
                    </div>
                    <input type="text" name="txtsonha" id="txtsonha" value="Chuyển khoản ngân hàng">
                </div>
            </div>

            <button  class="dongy"  onclick="dongydathang()" style="color:white;font-size: 20px;"><i class="fa-brands fa-vimeo-v" style="color: rgb(252, 155, 51);font-size: 20px;"></i>Hoàn tất đơn hàng</button>


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


</body>
</html>
