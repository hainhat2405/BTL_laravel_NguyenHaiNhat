<div id="header">
        <div class="logo-header">
            <a href="{{ route('home') }}"><img src="/img/logo_thanh phuong.png" alt="" class="logo"></a>
        </div>

        <div class="menu-header">
            <ul class="main-nav">
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li><a href="{{ route('gioiThieu') }}">Giới thiệu</a></li>
                <li><a href="#">Hướng dẫn mua hàng</a></li>
                <li><a href="{{ route('tinTuc') }}">Tin tức đặc sản</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
        <?php
        ?>
        <div class="info-header">
            <nav class="nav-info">
                <ul class="ul-menu">
                            <?php
                                $customer_id = Session::get('Customer_id');
                                $customer_name = Session::get('Customer_name');
                                $idKhachHang = Session::get('idKhachHang');
                                if($customer_id !=NULL){
                                    
                                    ?>
                                        <li><h2>{{ $customer_name}}</h2>
                                        <?php
                                            if($idKhachHang == NULL){
                                                ?>
                                                <ul class="info-menu">
                                                    <li>
                                                        <a href="{{URL::to('/logout-Customers')}}">Đăng xuất</a>
                                                    </li>
                                                </ul>
                                                <?php
                                            }
                                            else{
                                                ?>
                                                <ul class="info-menu">
                                                    <li><a href="{{route('ttkh',$idKhachHang)}}">Thông tin cá nhân</a></li>
                                                    <li><a href="{{URL('history')}}">Lịch sử</a></li>
                                                    <li>
                                                        <a href="{{URL::to('/logout-Customers')}}">Đăng xuất</a>
                                                    </li>
                                                </ul>
                                                <?php
                                            }
                                        ?>
                                        

                                    <?php
                                
                                }else{
                                    ?>
                                    <li style="padding-top:40px;font-size: 20px;"><a style="color:black;text-decoration: none;"  href="{{URL::to('/logout-Customers')}}">Đăng nhập</a></li>
                                    <?php
                                }
                            ?>
                            
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- <i style="font-size: 40px;float: left;color: rgb(96, 177, 38);margin-right: 10px;margin-top: 20px;"class="fa-solid fa-headset"></i> -->
            

        </div>
            
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
