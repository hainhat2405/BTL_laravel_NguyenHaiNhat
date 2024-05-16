<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/TTKH.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
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

                <span>Thông tin đơn hàng</span>
            </span>
        </div>
    </div>
    <div class="info_order">
        <button style="padding:10px;color: red" onclick="showcart()"><a href="{{route('history')}}" style="text-decoration: none;">Chờ xử lý</a></button>
        <button style="padding:10px;color: red" onclick="showcart()"><a href="{{route('history_confirm')}}" style="text-decoration: none;">Đã mua</a></button>
        <button style="padding:10px;color: red" onclick="showcart()"><a href="{{route('history_unConfirm')}}" style="text-decoration: none;">Đã hủy</a></button>
    </div>
    <div id="container">
    @yield('content')
    
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
