<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tintuc.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Đại Lý Bánh Kẹo</title>
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
                <span>
                    <a href="DanhMuc.html">Tin tức đặc sản</a>
                </span>
            </span>
        </div>
    </div>

    <div class="content">
        <h1 style="padding: 10px 0 0 150px;color: rgb(96, 177, 38);">TIN TỨC ĐẶC SẢN</h1>
        <div class="noidung">
            <div class="content1">
                <div class="imgContent">
                    <img src="img/tong-hop-5-mon-ngon-tu-com-gay-thuong-nho-nhat-6-768x432.jpg" alt="">
                </div>
                <h3>
                    Tổng hợp 5 món ngon từ cốm gây “thương nhớ” nhất    </h3>
                <i class="far fa-folder"></i>
                <a href="#">Tin tức đặc sản</a>
            </div>
            <div class="content1">
                <div class="imgContent">
                    <img src="img/5-tac-dung-cua-chanh-dao-ngam-mat-ong-it-nguoi-biet-2-768x433.jpg" alt="">
                </div>
                <h3>
                    5 tác dụng của chanh đào ngâm mật ong ít người biết    
                </h3>
                <i class="far fa-folder"></i>
                <a href="#">Tin tức đặc sản</a>
            </div>

            <div class="content1">
                <div class="imgContent">
                    <img src="img/o-mai-ngon-5.jpeg" alt="">
                </div>
                <h3>
                    5 loại ô mai ngon Hà Nội được nhiều người ưa chuộng    </h3>
                <i class="far fa-folder"></i>
                <a href="#">Tin tức đặc sản</a>
            </div>
            <div class="content1">
                <div class="imgContent">
                    <img src="img/banh-com-9-1.jpeg" alt="">
                </div>
                <h3>
                    Mua Đặc Sản Hà Nội Tại Hồ Chí Minh    </h3>
                <i class="far fa-folder"></i>
                <a href="#">Tin tức đặc sản</a>
            </div>

            <div class="content1">
                    <div class="imgContent">
                        <img src="img/la-voi-co-tac-dung-gi-7-cong-dung-cua-la-voi-doi-voi-suc-khoe-7.jpg" alt="">
                    </div>
                    <h3>
                        Lá vối có tác dụng gì? 7 công dụng của lá vối đối với sức...    </h3>
                    <i class="far fa-folder"></i>
                    <a href="#">Tin tức đặc sản</a>
            </div>
            <div class="content1">
                <div class="imgContent">
                    <img src="img/la-voi-co-tac-dung-gi-7-cong-dung-cua-la-voi-doi-voi-suc-khoe-7.jpg" alt="">
                </div>
                <h3>
                    Lá vối có tác dụng gì? 7 công dụng của lá vối đối với sức...    </h3>
                <i class="far fa-folder"></i>
                <a href="#">Tin tức đặc sản</a>
            </div>
            <div class="content1">
                    <div class="imgContent">
                        <img src="img/la-voi-co-tac-dung-gi-7-cong-dung-cua-la-voi-doi-voi-suc-khoe-7.jpg" alt="">
                    </div>
                    <h3>
                        Lá vối có tác dụng gì? 7 công dụng của lá vối đối với sức...    </h3>
                    <i class="far fa-folder"></i>
                    <a href="#">Tin tức đặc sản</a>
            </div>


        </div>
    </div>



    <!-- Begin footer -->
    @include('User.partials.footer')
    <!-- End footer -->
</body>
</html>
