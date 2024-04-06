<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/DanhMuc.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/img/icon-td.jpg">
    <title>Bánh Cốm Hà Nội</title>
</head>
<body>
    <!-- Begin header -->
    @include('User.partials.header')
    <!-- End header -->


    <!-- Begin menu -->
    @include('User.partials.menu')
    <!-- End menu -->


    <!-- Begin content -->

    <!-- <div class="gioiThieu-tieude">
        <div class="breadcrumbs">
            <span >
                <span>
                    <a href="TrangChu.html">Trang chủ</a>
                </span>
                &raquo;
                
                <span>Bánh Cốm Hà Nội</span>
            </span>
        </div>
    </div> -->

    <div id="content-bkhn">
        <div class="content-bkhn1">
            
                <div class="ten-sp-bkhn">
                    <div class="ten-sp1-bkhn">
                        <h2 style="padding-left: 115px;"></h2>
                    </div>
                </div>
                
                <div class="content_sp">
                @foreach($id_LSP as $product)
                    <div class="sanPham">
                        <a href="{{ route('sanPham') }}"><img class="img_SP" src="/img/{{$product->hinhAnh}}" alt="Bánh Cốm Hà Nội" ></a>
                        <h4>{{$product->tenSanPham}}</h4>
                        <i>Đánh giá:
                            <span>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                        </i>
                        <h3>{{number_format($product->giaBan)." ". "VNĐ"}}</h3>
                    </div>
                @endforeach

                </div>
                
           
        </div>
    </div>
   


    <!-- End content -->

    <!-- Begin footer -->
    
    @include('User.partials.footer')
    <!-- End footer -->
</body>
</html>
