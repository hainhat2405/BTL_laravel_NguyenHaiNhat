<div id="menu">
        <div id="menu-dmsp">
            <nav class="container">
                <ul id="main-menu">
                    <li><a style="padding: 15px 20px;color: white;" href="">DANH MỤC SẢN PHẨM <i style="margin-left: 10px;color: white;" class="far fa-list-alt"></i></a>
                        
                            <ul class="sub-menu">
                                @foreach($lsp as $key =>$lsp)
                                    <li><a href="{{ URL::to('/danh-muc/'.$lsp->idLoaiSP) }}">{{$lsp->tenLoaiSP}}</a></li>
                                   
                                    @endforeach
                            </ul>
                        
                    </li>
                </ul>
            </nav>

        </div>
        <div id="search">
            <div id="search-1">
                <input type="search" name="src" id="src" style="width:100%;height: 100%;padding: 0.375rem 0.75rem;" placeholder="Tìm Kiếm Sản Phẩm" >
            </div>
        </div>
        <div id="icon-search">
            <i style="padding: 15px 25px;color: white;" class="fa fa-search"></i>
        </div>
        <div id="giohang">
            <a href="GioHang.html"><i class="fa fa-shopping-cart" style="font-size:14px;"></i>Giỏ hàng</a>
        </div>
    </div>