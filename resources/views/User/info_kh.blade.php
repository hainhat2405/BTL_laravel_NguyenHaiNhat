<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/thongTin.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="img/icon-td.jpg">
    <title> Thông tin cá nhân</title>
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

                <span>Thông tin cá nhân</span>
            </span>
        </div>
    </div>

    <div id="container">
        <h1>Thông tin cá nhân</h1>
        <!-- <p style="padding-left:150px">Vui lòng đăng nhập hoặc đăng ký để thanh toán giỏ hàng và xem lại lịch sử mua hàng</p> -->
        <div id="ttkh">
            <form action="{{ route('infoKH',['idKhachHang' => $kh->idKhachHang])}}" method="post">
                @csrf
                @method('PUT')
                @if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif
                <div class="ttkh1">
                    <div class="namekh">
                        <span>
                            <i class="fa fa-address-card"></i>
                        </span>
                        <input type="text" name="tenKhachHang" id="txtnamekh" value="{{$kh->tenKhachHang}}" onblur="chkname()">
                        <span id="chkName" style="color: red;display: inline;"></span>

                    </div>

                    <div class="sdtkh">
                        <span>
                            <i class="fa fa-phone"></i>
                        </span>
                        <input type="text" name="soDienThoai" id="txtsdtkh" value="{{$kh->soDienThoai}}"  onblur="chksdt()">
                        <span id="chkSdt" style="color: red;display: inline;"></span>
                    </div>
                </div>

                <div class="ttkh2">
                    <div class="emailkh">
                        <span>
                            <i class="fa fa-envelope-open"></i>
                        </span>
                        <input type="email" name="email" id="txtemailkh" value="{{$kh->email}}"  onblur="chkemail()">
                        <span id="chkEmail" style="color: red;display: inline;"></span>
                    </div>
                </div>
                
                <div class="ttkh4">
                    <div class="sonha">
                        <span>
                            <i class="fa fa-map-marker"></i>
                        </span>
                        
                        <input type="text" name="diaChi" id="txtsonha" value="{{$kh->diaChi}}"  onblur="chksonha()">
                        <span id="chkSonha" style="color: red;display: inline;"></span>
                    </div>
                </div>


                <div class="ttkh5">
                    <div class="note">
                        <span>
                        <i class="fa-solid fa-cake-candles"></i>
                        </span>
                        <input type="date" style="height:46px" name="ngaySinh" id="ngaySinh" value="{{$kh->ngaySinh}}" placeholder="ngay sinh" onblur="chksonha()">
                    </div>
                </div>
                <input type="submit" class="dongy"  onclick="dongydathang()" style="color:white;font-size: 20px;margin-top:20px;margin-left:36%" value="Thay đổi thông tin">
            </form>


        </div>

            
        </div>
    </div>
    <!-- Begin footer -->
    @include('User.partials.footer')


</body>
</html>

