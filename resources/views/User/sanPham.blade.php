<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/SanPham.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{asset('img/icon-td.jpg')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title> Bánh Cốm Hà Nội - </title>
</head>
<body>
    <!-- Begin header -->
    @include('User.partials.header')
    <!-- End header -->


    <!-- Begin menu -->
    @include('User.partials.menu')
    <!-- End menu-->


    <div class="gioiThieu-tieude">
        <div class="breadcrumbs">
            <span >
                <span>
                    <a href="TrangChu.html">Trang chủ</a>
                </span>
                &raquo;
                <span>
                    <a href="DanhMuc.html">Product</a>
                </span>
                &raquo;
                <span>Bánh Cốm Hà Nội</span>
            </span>
        </div>
    </div>
    <!-- Begin content -->
    @foreach($detailSP as $detailSP)
    <div id="content-sanPham" >

        <div class="thongTin" >
            <div class="thongTin-1" >
                <div class="main">
                    <img src="/img/{{$detailSP->hinhAnh}}" alt="" class="img-feature">
                        <div class="control prev"><i class="fa-solid fa-chevron-left" style=" color: white;"></i></i></div>
                        <div class="control next"><i class="fa-solid fa-chevron-right" style=" color: white;"></i></div>

                </div>
                <!-- <div class="list-image">
                    <div> <img src="{{asset('img/banhcombaominh.jpg')}}" alt=""></div>
                    <div><img src="{{asset('img/banh-com-bao-minh-7-1.jpg')}}" alt=""></div>
                    <div><img src="{{asset('img/banh-com-4-2-e1666235165251.jpg')}}" alt=""></div>
                    <div>  <img src="img/banh-com-bao-minh-1-1 (1).jpg" alt=""></div>
                    <div><img src="img/banh-com-bao-minh-7-2.jpg" alt=""></div>
                </div> -->

            </div>
            <div class="thongTin-2">

                <form action="{{URL::to('/save-cart')}}" method="post">
                    {{csrf_field()}}
                    <h1>{{$detailSP->tenSanPham}}</h1>
                    <h3>{{number_format($detailSP->giaBan). " " . "VNĐ"}}</h3>
                    <strong>Loai:{{$detailSP->tenLoaiSP}}</strong>
                    <div class="input-soLuong">
                        <div class="soLuong">
                            <span>Số Lượng</span>
                        </div>
                        <input  type="number" name="soLuong" min="1" max="{{$detailSP->soLuong}}" value="1"  style="width: 72%;height: 100%;padding: 0.375rem 0.75rem;">
                        <input  type="hidden" name="idSP_hidden" value="{{$detailSP->idSanPham}}"  style="width: 72%;height: 100%;padding: 0.375rem 0.75rem;">
                    </div>

                    <button type="submit" class="btn2"  onclick="themvaogiohang(this),showcart()">Thêm vào giỏ</span></button>
                </form>

                <div id="share">
                    <span>SHARE:</span>
                    <a class="facebook" rel="nofollow" href="http://www.facebook.com/" onclick="popUp=window.open(
                            'http://www.facebook.com/sharer.php?u=https://dacsanthanhphuong.vn/shop/banh-com/',
                            'popupwindow',
                            'scrollbars=yes,width=800,height=400');
                        popUp.focus();
                        return false">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a class="twitter" rel="nofollow" href="http://twitter.com/" onclick="popUp=window.open(
                            'http://twitter.com/intent/tweet?text=\'Bánh Cốm Hà Nội\' - https://dacsanthanhphuong.vn/shop/banh-com/',
                            'popupwindow',
                            'scrollbars=yes,width=800,height=400');
                        popUp.focus();
                        return false">
                    <i class="fab fa-twitter"></i>
                    </a>
                    <a class="linkedin" rel="nofollow" href="http://www.linkedin.com/" onclick="popUp=window.open(
                            'http://www.linkedin.com/shareArticle?url=https://dacsanthanhphuong.vn/shop/banh-com/',
                            'popupwindow',
                            'scrollbars=yes,width=800,height=400');
                        popUp.focus();
                        return false">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="pinterest" rel="nofollow" href="http://www.pinterest.com/" onclick="popUp=window.open(
                        'http://pinterest.com/pin/create/button/?url=https://dacsanthanhphuong.vn/shop/banh-com/&amp;media=https://dacsanthanhphuong.vn/wp-content/uploads/2014/11/banh-com-4-1.jpg&amp;description=Bánh Cốm Hà Nội',
                        'popupwindow',
                        'scrollbars=yes,width=800,height=400');
                    popUp.focus();
                    return false">
                    <i class="fab fa-pinterest"></i>
                </a>
                </div>
            </div>

            <div class="thongTin-3">
                <h1 style="color: red;">Chính Sách Khách Hàng</h1>

                <span><i class="fas fa-car"></i>Giao hàng toàn quốc</span>
                <span><i class="fas fa-box-open"></i>Được kiểm tra hàng</span>
                <span><i class="fab fa-cc-amazon-pay"></i>Thanh toán nhận hàng</span>
                <span><i class="fas fa-award"></i>Chất lượng, Uy tín</span>
                <a href="" onclick="showcart()"><i class="fa-solid fa-phone fa-rotate-270" style="color: white;"></i>Hotline: 0835286779</a>

            </div>

        </div>


        <div id="content-sp2">
            <!--Danh mục sản phẩm-->
            <div class="content-dmsp">  
                <div class="gioiThieu-DMSP">
                    <h3 class="h3">
                        <span>Bài viết mới</span>
                    </h3>
                </div>
                <div id="gioithieu-BVM">
                    <div class="baiVietMoiP1">
                        @foreach($blog as $blog)
                            <div class="BVM1">
                                <div class="BVM-img">
                                    <a href="">
                                        <img src="/img/{{$blog->image}}" alt="">
                                    </a>
                                </div>
                                <div class="BVM-nd">
                                    <h3>
                                        {{$blog->title}}
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="content-ctsp">  <!--Chi tiết sản phẩm-->
                <div class="ctsp">
                    <h3 class="h3">
                        <span>Chi tiết sản phẩm</span>
                    </h3>
                </div>
                <?php
                    $description = $detailSP->moTa;
                ?>
                <div class="info-ctsp">
                    <div class="noidung">
                        {!! $description !!}
                       
                        
                    </div>

                </div>
                
            </div>
            <div class="splq">
                    <h3 class="h3">
                        <span>Sản Phẩm Liên Quan</span>
                    </h3>
            </div>
                <div class="sP-splq">
                    @foreach($relate_product as $rlt_product)
                    <div class="sP1">
                        <div class="sP-img">
                            <img src="/img/{{$rlt_product->hinhAnh}}" alt="">
                            <span style="padding-top: 10px;">{{$rlt_product->tenSanPham}}</span>

                        </div>
                        <div class="sP-danhGia">
                            <i>Đánh giá:</i>
                            <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            </span>
                        </div>
                        <div class="sP-giaTien">
                            <h4>{{number_format($rlt_product->giaBan)}}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
    <!-- End content -->
    @endforeach



    <!-- Begin footer -->
    @include('User.partials.footer')
    <script src="js/SanPham.js"></script>
    <!-- End footer -->
        <!--  -->
        <div class="image">

            <img id="img" onclick="changeImage()" src="img/icon-phone2.png" alt="">

        </div>
</body>


</html>



