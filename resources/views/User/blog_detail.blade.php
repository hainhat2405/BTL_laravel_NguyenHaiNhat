<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/tintuc.css')}}">
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
        @foreach($blog_detail as $blog_detail)
        <div class="detail">
            <?php
                $description = $blog_detail->content;
            ?>
            {!! $description !!}


        </div>
        @endforeach
    </div>



    <!-- Begin footer -->
    @include('User.partials.footer')
    <!-- End footer -->
    <script src="js/SanPham.js"></script>
    <!-- End footer -->
        <!--  -->
        <div class="image">

            <img id="img" onclick="changeImage()" src="img/icon-phone2.png" alt="">

        </div>
</body>
</html>
