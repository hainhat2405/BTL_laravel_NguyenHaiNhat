<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Trangchu.css">
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
            @foreach($lsp as $category)
            <div class="product">
                
                <div class="category_name">
                    <h1>{{$category->tenLoaiSP}}</h1>
                    
                </div>
                <div class="view_cat">
                    <a href="{{ URL::to('/danh-muc/'.$category->idLoaiSP) }}">Xem tất cả <i class="fa-solid fa-arrow-right" style="margin-top:1px"></i></a>
                </div>
                @foreach($all_products_by_category as $product)
                    @if($product->idLoaiSP == $category->idLoaiSP)
                    
                        <div class="product_info">
                            
                            <a href="{{ URL::to('/chi-tiet-san-pham/'.$product->idSanPham) }}" style="text-decoration: none;color: black;">
                                <div class="product_img">
                                    <img src="img/{{$product->hinhAnh}}" alt="Sấu giòn Tiến Thịnh" >
                                </div>
                                <h4 style="text-align:center;padding-top:25px;">{{$product->tenSanPham}}</h4>
                                <h4 style="text-align:center;padding-top:30px;color:rgb(219, 66, 112)">{{number_format($product->giaBan).' '.'VNĐ'}}</h4>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            @endforeach
            
            <
        </div>


    </div>
    <!-- End content -->

    <!-- Begin footer -->
    @include('User.partials.footer')




</body>
</html>
