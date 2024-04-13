<div id="header">
        <div id="img-logo">
            <a href="{{ route('home') }}"><img src="/img/logo_thanh phuong.png" alt="" class="logo"></a>
        </div>

        <ul class="main-nav">
            <li><a href="{{ route('home') }}">Trang chủ</a></li>
            <li><a href="{{ route('gioiThieu') }}">Giới thiệu</a></li>
            <li><a href="#">Hướng dẫn mua hàng</a></li>
            <li><a href="{{ route('tinTuc') }}">Tin tức đặc sản</a></li>
            <li><a href="#">Liên hệ</a></li>
        </ul>
        <div style="padding: 35px;" class="icon-dathang">
            <!-- <i style="font-size: 40px;float: left;color: rgb(96, 177, 38);margin-right: 10px;margin-top: 20px;"class="fa-solid fa-headset"></i> -->
            <?php
                $customer_id = Session::get('Customer_id');
                if($customer_id !=NULL){
                    
                    ?>
                    <a href="{{URL::to('/logout-Customers')}}" style="text-decoration: none;font-size: 20px;display:inline;color: black;margin-top: 50px;margin-right:30px">Đăng xuất</a>
                    <?php
                
                }else{
                    ?>
                    <a href="{{URL::to('/logout-Customers')}}" style="text-decoration: none;font-size: 20px;display:inline;color: black;margin-top: 50px;margin-right:30px">Đăng nhập</a>
                    <?php
                }
            ?>
            
            
            <!-- <span>Đăng nhập</span> -->
        </div>
        <!-- <div style="padding: 10px;" class="icon-dathang">
            <i style="font-size: 40px;float: left;color: rgb(96, 177, 38);margin-right: 10px;margin-top: 20px;"class="fa-solid fa-headset"></i>
            <strong style="display:block;color: rgb(96, 177, 38);margin-top: 20px;">Đặt hàng</strong>
            <span>Đăng nhập</span>
        </div> -->
        <!-- <div id="user_login">
            <a href="{{route('gioHang')}}"><i class="fa fa-shopping-cart" style="font-size:14px;"></i>Giỏ hàng</a>
        </div> -->
    </div>
