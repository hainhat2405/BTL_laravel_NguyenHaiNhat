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
                        <input  type="number" name="soLuong" min="1" max="100" value="1"  style="width: 72%;height: 100%;padding: 0.375rem 0.75rem;">
                        <input  type="hidden" name="idSP_hidden" value="{{$detailSP->idSanPham}}"  style="width: 72%;height: 100%;padding: 0.375rem 0.75rem;">
                    </div>
                    <button class="btn1"><a href="">
                            <i class="fa-solid fa-phone fa-rotate-270"></i>
                            <span>Đặt hàng ngay</span>
                        </a></button>
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
            <div class="content-dmsp">   <!--Danh mục sản phẩm-->
                <div class="gioiThieu-DMSP">
                    <h3 class="h3">
                        <span>Bài viết mới</span>
                    </h3>
                </div>
                <div id="gioithieu-BVM"> <!--bài viết mới-->
                    <div class="baiVietMoiP1">
                        <div class="BVM1">
                            <div class="BVM-img">
                                <a href="">
                                    <img src="img/cong-dung-cua-qua-buoi-9-768x433.jpg" alt="">
                                </a>
                            </div>
                            <div class="BVM-nd">
                                <h3>
                                    5 tác dụng của chanh...
                                </h3>
                            </div>
                        </div>
                        <div class="BVM2">
                            <div class="BVM-img">
                                <a href="">
                                    <img src="img/tong-hop-5-mon-ngon-tu-com-gay-thuong-nho-nhat-6-768x432.jpg" alt="">
                                </a>
                            </div>
                            <div class="BVM-nd">
                                <h3>Tổng hợp 5 món ngon...</h3>
                            </div>
                        </div>
                        <div class="BVM3">
                            <div class="BVM-img">
                                <a href="">
                                    <img src="img/5-tac-dung-cua-chanh-dao-ngam-mat-ong-it-nguoi-biet-2-768x433.jpg" alt="">
                                </a>
                            </div>
                            <div class="BVM-nd">
                                <h3>5 tác dụng của chanh...</h3>
                            </div>
                        </div>
                        <div class="BVM4">
                            <div class="BVM-img">
                                <a href="">
                                    <img src="img/dia-chi-mua-o-mai-5-768x511.jpg" alt="">
                                </a>
                            </div>
                            <div class="BVM-nd">
                                <h3>TOP địa chỉ mua ô mai...</h3>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="baiVietMoiP2">

                    </div> -->
                </div>
            </div>

            <div class="content-ctsp">  <!--Chi tiết sản phẩm-->
               <div class="ctsp">
                    <h3 class="h3">
                        <span>Chi tiết sản phẩm</span>
                    </h3>
                </div>
                <div class="info-ctsp">
                    <div class="noidung">
                        {{$detailSP->moTa}}
                        <h2 style="padding: 10px;">1. Giới thiệu về bánh cốm Hà Nội</h2>
                        <p>Bánh cốm đã “tồn tại theo năm tháng” với hàng trăm năm lịch sử, do ông tổ dòng họ Nguyễn Duy ở phố hàng Than. Sau hàng trăm năm, đây vẫn là món đặc sản “dân dã” tại Hà Thành nức tiếng gần xa.</p>
                        <p>Cửa hàng chuyên cung cấp bánh cốm thương hiệu Bảo Minh. Đây là một thương hiệu rất nổi tiếng được nhiều người trong nước và nước ngoài ưa chuộng.</p>
                        <p>Phù hợp làm quà tặng cho người thân bạn bè hoặc những dịp cưới hỏi.</p>
                        <p><strong>Bánh luôn có sẵn tại cửa hàng, luôn có date mới.</strong></p>
                        <p><strong>Hạn sử dụng: </strong>12 ngày.</p>
                        <p><strong>Quy cách đóng gói:</strong>65 Gram có hộp.</p>
                        <p><strong>Trọng lượng:</strong>7x7cm</p>
                        <h2 style="padding: 10px;">2. Bánh cốm Hà Nội - thức quà “dân dã” tại Hà Thành</h2>
                        <div class="info-img">
                            <img src="img/banh-com-hop65g.jpg" alt="">
                        </div>
                        <p style="text-align: center;">Hộp 65 Gram</p>
                        <div class="info-img">
                            <img src="img/banh-com-1-1.jpg" alt="">
                        </div>
                        <p style="text-align: center;">Hạn sử dụng bánh 12 ngày rất phù hợp làm quà biếu, hay làm tráp trong dịp cưới hỏi Với nguyên liệu chính là gạo nếp cái hoa vàng và đậu xanh. Gạo nếp để tạo ra cốm phải là loại gạo được thu hoạch vào giai đoạn hạt đã chắc xanh, không quá non cũng không quá già. Sau đó sẽ được đem đi sấy khô, ủ và xào đường để làm vỏ bánh. Nhân bánh sẽ làm từ đậu xanh và dừa nạo để tạo nên độ bùi, thơm ngon.</p>

                        <div class="info-img">
                            <img src="img/banh_com.jpg" alt="">
                        </div>
                        <p style="text-align: center;">
                            Lớp vỏ được làm hoàn toàn bằng cốm đầu mùa cho ra những chiếc bánh vừa dẻo, vừa bùi vô cùng hấp dẫn. Bánh cốm Hà Nội sẽ có lớp vỏ màu xanh lá mạ, dẻo. Khi ăn bạn sẽ cảm nhận được vị ngọt dịu của lớp vỏ cốm bên ngoài. Kết hợp hoàn hảo với vị ngọt bùi của nhân bánh đậu xanh và dừa nạo. Tất cả hòa quyện hoàn hảo tạo nên hương vị đặc trưng, khó cưỡng. Ai mà đã từng thưởng thức qua thì chắc chắn sẽ không thể nào quên.
                        </p>
                        <h2 style="padding: 10px;">3. Giá bánh cốm Hà Nội bao nhiêu?</h2>
                        <p>Trải qua hàng trăm năm lịch sử, bánh cốm Hà Nội vẫn là thức quà lưu giữ được nét đặc trưng của “tinh hoa đất trời”. Thường sử dụng trong các dịp lễ, Tết, làm quà biếu tặng hoặc đám cưới hỏi. Vậy giá bánh cốm Hà Nội bao nhiêu tiền? Dưới đây là mức giá bánh để bạn tham khảo:</p>
                        <h2 style="padding: 10px;font-size: 22px;">Bánh Cốm cưới hộp lớn ( dùng cho dịp cưới hỏi)</h2>
                        <h2 style="padding: 10px;font-size: 22px;">Với quý khách đặt bánh cốm lớn cho dịp cưới hỏi vui lòng đặt trước 3 ngày để luôn có date mới nhất</h2>
                        <p><strong>28.000/hộp/cái, trọng lượng bánh 200 gram</strong></p>
                        <p><strong>38.000/hộp/cái, trọng lượng bánh 300 gram</strong></p>
                        <p><strong>48.000/hộp/cái, trọng lượng bánh 400 gram</strong></p>
                        <p><strong>58.000/hộp/cái, trọng lượng bánh 500 gram</strong></p>
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
                            <img src="img/banhdauxanhrongvang.jpg" alt="">
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
