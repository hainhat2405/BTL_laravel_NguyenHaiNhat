<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tintuc.css">
    <link rel="stylesheet" href="css/header.css">
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
            @foreach($blog as $blog)
            <div class="content1">
            <a href="{{route('blog_detail',$blog->id)}}">
                <div class="imgContent">
                    <img src="img/{{$blog->image}}" alt="">
                </div>
                <h3>
                    {{$blog->title}} </h3>
                <i class="far fa-folder"></i>
                Tin tức đặc sản</a>
            </div>
            @endforeach
            


        </div>
    </div>


    <!-- Begin footer -->
    @include('User.partials.footer')
    <!-- End footer -->

</body>
</html>
