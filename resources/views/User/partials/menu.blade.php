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
                <form action="{{URL::to('/search-product')}}" method="post">
                    {{csrf_field()}}
                    <input type="search" name="keywords_submit" id="src" style="width:80%;height: 46px;padding: 0.375rem 0.75rem;" placeholder="Tìm Kiếm Sản Phẩm" >
                    <input type="submit" style="width:20%;height: 46px;padding: 0.375rem 0.75rem;float:right" value="Tìm kiếm">
                </form>
            </div>
        </div>
        <!-- <div id="icon-search">
            
        </div> -->
        <div id="giohang">
            <a href="{{route('gioHang')}}"><i class="fa fa-shopping-cart" style="font-size:14px;"></i>Giỏ hàng</a>
        </div>
    </div>