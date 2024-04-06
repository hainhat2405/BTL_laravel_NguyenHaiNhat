<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DBSHOP</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 2.5rem; height: 2.5rem;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('admin')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Trang chủ</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Loại sản phẩm</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('index')}}" class="dropdown-item">Danh sách loại sản phẩm</a>
                            <a href="{{route('add')}}" class="dropdown-item">Thêm loại sản phẩm</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>sản phẩm</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('indexSP')}}" class="dropdown-item">Danh sách Sản Phẩm</a>
                            <a href="{{route('addSP')}}" class="dropdown-item">Thêm Sản Phẩm</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Nhân viên</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('indexNV')}}" class="dropdown-item">Danh sách nhân viên</a>
                            <a href="{{route('addNV')}}" class="dropdown-item">Thêm nhân viên</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Khách hàng</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('indexKH')}}" class="dropdown-item">Danh sách Khách hàng</a>
                            <a href="{{route('addKH')}}" class="dropdown-item">Thêm Khách hàng</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Nhà cung cấp</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('indexNCC')}}" class="dropdown-item">Danh sách nhà cung cấp</a>
                            <a href="{{route('addNCC')}}" class="dropdown-item">Thêm nhà cung cấp</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Hóa đơn bán</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('indexHDB')}}" class="dropdown-item">Danh sách Hóa đơn bán</a>
                            <a href="" class="dropdown-item">Thêm Hóa đơn bán</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Hóa đơn nhập</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="" class="dropdown-item">Danh sách Hóa đơn nhập</a>
                            <a href="" class="dropdown-item">Thêm Hóa đơn nhập</a>
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>