<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Trangchu.css">
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

    <!-- Begin slide -->
    <div id="slide">
      <img style="width: 100%;height: 100%;" src="img/banhkeo3.jpg" alt="">
    </div>
    <!-- End slide -->

    <div class="slide-2">
        <div style="padding: 10px;" class="giaohangst">
            <img  src="img/img-xe.png" alt="">
            <strong style="display:block;padding-left:80px;color: rgb(96, 177, 38);">Giao hàng Siêu Tốc</strong>
            <span style="padding-left:20px;font-size: 14px;" >Nhanh gọn - Tiện lợi</span>
        </div>
        <div style="padding: 10px;" class="spbac">
            <img  src="img/img-khien.png" alt="">
            <strong style="display:block;padding-left:80px;color: rgb(96, 177, 38);">Sản phẩm chính gốc Bắc</strong>
            <span style="padding-left:20px;font-size: 14px;" >Cam kết Sản phẩm chính gốc Bắc</span>
        </div>
        <div style="padding: 10px;" class="dathangng">
            <img  src="img/img-phone.png" alt="">
            <strong style="display:block;padding-left:80px;color: rgb(96, 177, 38);">Giao hàng Siêu Tốc</strong>
            <span style="padding-left:20px;font-size: 14px;" >Nhanh gọn - Tiện lợi</span>
        </div>
    </div>

    <!-- Begin content -->
    <div id="content">
        <div class="content-1">
            <div class="ten-sp">
                <div class="ten-sp1">
                    <h2>Ô Mai Hà Lam - Tiến Thịnh</h2>

                </div>
                <ul class="ten-sp2">
                    <li><a href=""><i class="fa-solid fa-seedling"></i>Ô Mai Hồng Lam</a></li>
                    <li><a href=""><i class="fa-solid fa-seedling"></i>Ô Mai Tiến Thịnh</a></li>
                    <li><a href=""><i class="fa-solid fa-seedling"></i>Sấu và Mơ ngâm đường</a></li>
                </ul>
                <ul class="xemtc">
                    <li style="float:right;color: #97E6B8;"><a href="{{route('danhMuc')}}"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i>Xem tất cả</a></li>
                </ul>
            </div>
            <div class="content_sp">
                @foreach($sp as $key =>$sp)
                <div class="sanPham">
                    <a href="{{ URL::to('/chi-tiet-san-pham/'.$sp->idSanPham) }}" style="text-decoration: none;color: black;">
                        <img class="img_SP" src="img/{{$sp->hinhAnh}}" alt="Sấu giòn Tiến Thịnh" >
                        <h4>{{$sp->tenSanPham}}</h4>
                        <i>Đánh giá:
                            <span>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                        </i>
                        <h3>{{number_format($sp->giaBan).' '.'VNĐ'}}</h3> 
                    </a>
                    
                </div>
                @endforeach
            </div>
            <div class="ten-sp">
                <div class="ten-sp1">
                    <h2 style="padding-left: 115px;">Bánh Hà Nội</h2>

                </div>
            </div>
            <div class="content_sp">
                <div class="sanPham">
                    <a href="SanPham.html" style="text-decoration: none;color: black;">
                        <img class="img_SP" src="img/banhcombaominh.jpg" alt="Bánh Cốm Hà Nội" >
                        <h4>Bánh Cốm Hà Nội</h4>
                    </a>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>8.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/banhcheminhngoc.jpg" alt="Bánh Chè Lam Minh Ngọc" >
                    <h4>Bánh Chè Lam Minh Ngọc</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>55.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/banh-dau-xanh-A12.jpg" alt="Bánh Đậu Xanh Hộp Vừa" >
                    <h4>Bánh Đậu Xanh Hộp Vừa</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>45.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/banhdauxanhrongvangvau.jpg" alt="Bánh Đậu Xanh Hộp Lớn" >
                    <h4>Bánh Đậu Xanh Hộp Lớn</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>55.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/banh-cay-1-2.jpg" alt="Bánh Cáy Làng Nguyễn" >
                    <h4>Bánh Cáy Làng Nguyễn</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>35.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/banhdauxanhhatsen.jpg" alt="Bánh Đậu Xanh Hạt Sen" >
                    <h4>Bánh Đậu Xanh Hạt Sen</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>35.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/banhcha.jpg" alt="Bánh Chả" >
                    <h4>Bánh Chả</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>40.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/banhnhan.jpg" alt="Bánh nhãn" >
                    <h4>Bánh Chả</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>55.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/banhdauxanhhoaan.jpeg" alt="Bánh đậu xanh Hòa An" >
                    <h4>Bánh đậu xanh Hòa An</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>35.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/banhdauxanhtraxanh.jpg" alt="Bánh đậu xanh trà xanh" >
                    <h4>Bánh đậu xanh trà xanh</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>35.000đ</h3>
                </div>
            </div>
            <!-- SanPham3 -->
            <div class="ten-sp">
                <div class="ten-sp1">
                    <h2 style="padding-left: 125px;">Kẹo Hà Nội</h2>

                </div>
            </div>
            <div class="content_sp">
                <div class="sanPham">
                    <img class="img_SP" src="img/keo-lac-thanh-lan-1-1.jpg" alt="Kẹo dồi lạc vừng Thanh Lan" >
                    <h4>Kẹo dồi lạc vừng Thanh Lan</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>30.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/keo-doi-vung1.jpg" alt="Kẹo dồi vừng" >
                    <h4>Kẹo dồi vừng</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>35.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/keo-lac-thanh-lan-1-1.jpg" alt="Kẹo sìu châu Thanh Lan" >
                    <h4>Kẹo sìu châu Thanh Lan</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>35.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/keo-lac-vung-dien-huong-3.jpg" alt="Kẹo lạc vừng" >
                    <h4>Kẹo lạc vừng</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>35.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/lac-rang-hung-liu-ba-van-8.jpg" alt="Lạc rang" >
                    <h4>Lạc rang</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>30.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/bi-lac-nho (1).jpg" alt="Kẹo Mứt Lạc (Kẹo trứng chim)" >
                    <h4>Kẹo Mứt Lạc (Kẹo trứng chim)</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>40.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/keo-doi-dien-huong.jpg" alt="Keo dồi Thái Bình" >
                    <h4>Keo dồi Thái Bình</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>40.000đ</h3>
                </div>
                <div class="sanPham">
                    <img class="img_SP" src="img/keo-me-trang-nam-huong.jpg" alt="Kẹo vừng trắng Nam Hương" >
                    <h4>Kẹo vừng trắng Nam Hương</h4>
                    <i>Đánh giá:
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </i>
                    <h3>40.000đ</h3>
                </div>

            </div>
        </div>
    </div>
    <!-- End content -->

    <!-- Begin footer -->
    @include('User.partials.footer')
    <script src="js/TrangChu.js"></script>
    <!-- End footer -->
    <div class="image">

        <img id="img" onclick="changeImage()" src="img/icon-phone2.png" alt="">

    </div>



</body>
</html>
