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
                    <h2>Kết quả</h2>

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
                @foreach($search_product as $key =>$sp)
                <!-- <div class="sanPham" >
                    <a href="{{ URL::to('/chi-tiet-san-pham/'.$sp->idSanPham) }}" style="text-decoration: none;color: black;">
                        <img class="img_SP" src="img/{{$sp->hinhAnh}}" alt="Sấu giòn Tiến Thịnh" >
                        <h4>{{$sp->tenSanPham}}</h4>
                        <h3>{{number_format($sp->giaBan).' '.'VNĐ'}}</h3> 
                    </a>
                    
                </div> -->
                <div class="product_info">
                            <a href="{{ URL::to('/chi-tiet-san-pham/'.$sp->idSanPham) }}" style="text-decoration: none;color: black;">
                                <div class="product_img">
                                    <img src="img/{{$sp->hinhAnh}}" alt="Sấu giòn Tiến Thịnh" >
                                </div>
                                <h4 style="text-align:center;padding-top:15px;">{{$sp->tenSanPham}}</h4>
                                <h4 style="text-align:center;padding-top:15px;color:rgb(219, 66, 112)">{{number_format($sp->giaBan).' '.'VNĐ'}}</h4>
                            </a>
                        </div>
                @endforeach
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
